<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * Bakım modu etkinken erişilebilir olması gereken URI'ler.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
