<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use Carbon\Carbon;

class UserController extends Controller
{
    public function authPage(){
        return view('authForm');
    }

    public function regPage(){
        return view('registerForm');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $user = User::where('email', $email)->first();

        if ($user && $password == $user->password) {
            $userID = $user->id;
            $orders = $this->getConfirmedOrders($userID);
            $totalHours = $this->getTotalHoursPerDay($userID);
            $totalEarnings = $this->getTotalEarningsPerDay($userID);
            
            return view('ordersPage', [
                'totalEarnings' => $totalEarnings,
                'totalHours' => $totalHours,
                'orders' => $orders,
                'userID' => $userID,
            ]);
        }
        else{
            return back();
        }
    }

    public function getConfirmedOrders($userID)
    {
        $status = 'confirmed';
        $oneWeek = Carbon::now()->subDays(7)->toDateString();

        return Order::where('provider_id', $userID)
                    ->where('status', $status)
                    ->where('created_at', '>', $oneWeek)
                    ->get();
    }

    public function getTotalHoursPerDay($userID)
    {
        $status = 'confirmed';
        $oneWeek = Carbon::now()->subDays(7)->toDateString();
        $orders = Order::where('provider_id', $userID)
                        ->where('status', $status)
                        ->whereDate('created_at', '>', $oneWeek)
                        ->get();

        $totalHoursPerDay = [];

        foreach ($orders as $order) {
            $orderDate = $order->created_at->toDateString();

            if (!isset($totalHoursPerDay[$orderDate])) {
                $totalHoursPerDay[$orderDate] = 0;
            }

            $totalHoursPerDay[$orderDate] += $order->total_time;
        }

        return $totalHoursPerDay;
    }

    public function getTotalEarningsPerDay($userID)
    {
        $status = 'confirmed';
        $oneWeek = Carbon::now()->subDays(7)->toDateString();
        $orders = Order::where('provider_id', $userID)
                        ->where('status', $status)
                        ->whereDate('created_at', '>', $oneWeek)
                        ->get();

        $totalEarningsPerDay = [];

        foreach ($orders as $order) {
            $orderDate = $order->created_at->toDateString();

            if (!isset($totalEarningsPerDay[$orderDate])) {
                $totalEarningsPerDay[$orderDate] = 0;
            }

            $totalEarningsPerDay[$orderDate] += $order->earnings;
        }

        return $totalEarningsPerDay;
        
    }

    public function register(Request $request){
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $request->email)->first();

        if ($user) {
            return back();
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->save();
        return view('authForm');
    }
}
