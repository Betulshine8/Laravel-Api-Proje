<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Uygulama için model-ilke eşleştirmelerini yapılandırır.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Herhangi bir kimlik doğrulama / yetkilendirme hizmetini kaydetmek için kullanılan yapılandırma metodu.
     */
    public function boot(): void
    {
        //
    }
}
