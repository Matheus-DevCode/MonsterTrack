<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Configuration\Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * THE URIS THAT SHOULD BE  EXCLUDED FROM CSRF VERIFICATION.
     *
     * @var array<int, string>
     */
    protected array $except = [
        'api/start-mensagem'
    ];
}
