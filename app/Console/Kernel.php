<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
<<<<<<< HEAD
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
=======
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
<<<<<<< HEAD
     */
    protected function commands(): void
=======
     *
     * @return void
     */
    protected function commands()
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
