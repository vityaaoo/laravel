<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Http\Middleware\TrustProxies as Middleware;
=======
use Fideloper\Proxy\TrustProxies as Middleware;
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array<int, string>|string|null
=======
     * @var array|string|null
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
=======
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
}
