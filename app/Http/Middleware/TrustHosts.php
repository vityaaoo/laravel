<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
<<<<<<< HEAD
     * @return array<int, string|null>
     */
    public function hosts(): array
=======
     * @return array
     */
    public function hosts()
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
