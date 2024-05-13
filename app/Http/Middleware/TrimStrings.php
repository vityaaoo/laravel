<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
<<<<<<< HEAD
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
=======
     * @var array
     */
    protected $except = [
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
        'password',
        'password_confirmation',
    ];
}
