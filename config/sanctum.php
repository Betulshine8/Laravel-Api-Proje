<?php

use Laravel\Sanctum\Sanctum;

return [

    /*
    Stateful Domains

    Aşağıdaki etki alanlarından / ana bilgisayarlardan gelen istekler durum bilgisi içeren API alacaktır
    kimlik doğrulama çerezleri. Tipik olarak, bunlar yerel
    API'nize bir ön uç SPA aracılığıyla erişen | ve üretim etki alanları.
    Örneğin, localhost, localhost:3000, 127.0.0.1, 127.0.0.1:8000, ::1
    ve Sanctum::currentApplicationUrlWithPort()
    ile oluşturulan URL'ler.

    */

    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
        '%s%s',
        'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
        Sanctum::currentApplicationUrlWithPort()
    ))),

    /*
     Sanctum Guards
     Sanctum'un kullanıcılarının kimlik doğrulamasının yapıldığı yerdir.
     Bu yöntem, kullanıcıların kimlik doğrulamasının yapıldığı yerdir.
     
     Bu dizi, aşağıdaki durumlarda kontrol edilecek kimlik doğrulama korumalarını içerir
     Sanctum bir isteği doğrulamaya çalışıyor. Bu korumalardan hiçbiri
     talebin kimliğini doğrulayabiliyorsa, Sanctum taşıyıcıyı kullanacaktır.
     Kimlik doğrulama için gelen bir istekte bulunan | belirteci.
    
     
    */

    'guard' => ['web'],

    /*
    Expiration Minutes
    Sanctum'un kullanıcılarının kimlik doğrulamasının yapıldığı yerdir.
    Bu yöntem, kullanıcıların kimlik doğrulamasının yapıldığı yerdir.
    Bu dizi, aşağıdaki durumlarda kontrol edilecek kimlik doğrulama korumalarını içerir
    Sanctum bir isteği doğrulamaya çalışıyor. Bu korumalardan hiçbiri
    talebin kimliğini doğrulayabiliyorsa, Sanctum taşıyıcıyı kullanacaktır.
    Kimlik doğrulama için gelen bir istekte bulunan | belirteci.
     
    Bu değer, verilen bir belirtecin kaç dakika sonra
    süresi dolmuş olarak kabul edilir. Bu değer null ise, kişisel erişim belirteçleri
    süresi dolmaz. Bu, birinci taraf oturumlarının yaşam süresini değiştirmez.
   
    */

    'expiration' => null,

    /*
     Sanctum Middleware
     Sanctum'un kullanıcılarının kimlik doğrulamasının yapıldığı yerdir.
     Bu yöntem, kullanıcıların kimlik doğrulamasının yapıldığı yerdir.
     Bu dizi, aşağıdaki durumlarda kontrol edilecek kimlik doğrulama korumalarını içerir
  
    */

    'middleware' => [
        'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
        'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
    ],

];
