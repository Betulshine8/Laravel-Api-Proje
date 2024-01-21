<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
 Console Routes
 Bu dosya, tüm Closure tabanlı konsolunuzu tanımlayabileceğiniz yerdir
 komutlar. Her Closure bir komut örneğine bağlıdır ve bir
 Her komutun IO yöntemleriyle etkileşime geçmek için basit bir yaklaşım.
 Örneğin:
    Artisan::command('inspire', function () {
        $this->comment(Inspiring::quote());
    }
    )->purpose('Display an inspiring quote');
    Bu komut, artisan komutlarının çağrıldığı yerdir.
    

*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
