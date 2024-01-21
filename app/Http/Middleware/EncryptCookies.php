<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Şifrelenmemesi gereken çerezler.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
