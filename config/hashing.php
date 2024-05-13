<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Bcrypt algorithm. This will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'bcrypt' => [
<<<<<<< HEAD
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
=======
        'rounds' => env('BCRYPT_ROUNDS', 10),
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Argon algorithm. These will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'argon' => [
<<<<<<< HEAD
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
        'verify' => true,
=======
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
    ],

];
