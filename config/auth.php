<?php

return [

    /*
     Authentication Defaults

     Bu seçenek varsayılan kimlik doğrulama "korumasını" ve parolasını kontrol eder
     uygulamanız için seçenekleri sıfırlayın. Bu varsayılanları değiştirebilirsiniz
     Gerektiği gibi, ancak çoğu uygulama için mükemmel bir başlangıçtır.
    
     Varsayılan: "web"
     Varsayılan: "users"

    
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
     Authentication Guards

     Bu kimlik doğrulama korumasının hangi korumaların kullanılacağını belirler.
     Bu korumalar, kimlik doğrulama korumasının kullanıcılarının kimlik doğrulamasını
     kontrol etmek için kullanılır.
     Ardından, uygulamanız için her kimlik doğrulama korumasını tanımlayabilirsiniz.
     burada oturum depolamayı ve Eloquent kullanıcı sağlayıcısını kullanır.
    
    Tüm kimlik doğrulama sürücülerinin bir kullanıcı sağlayıcısı vardır. Bu, kullanıcı sağlayıcısının
    kullanıcılar aslında veritabanınızdan veya diğer depolama alanlarından alınır
    Kullanıcınızın verilerini kalıcı hale getirmek için bu uygulama tarafından kullanılan mekanizmalar.
    

    | Desteklenir: "oturum"

    
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    | User Providers
     
    Tüm kimlik doğrulama sürücülerinin bir kullanıcı sağlayıcısı vardır. Bu, kullanıcının nasıl
    kullanıcılar aslında veritabanınızdan veya diğer depolama alanlarından alınır
    Kullanıcınızın verilerini kalıcı hale getirmek için bu uygulama tarafından kullanılan mekanizmalar.
    
     Birden fazla kullanıcı tablonuz veya modeliniz varsa, birden fazla
     her bir modeli / tabloyu temsil eden kaynaklar. Bu kaynaklar daha sonra
     tanımladığınız herhangi bir ekstra kimlik doğrulama muhafızına atanabilir.
     

    | Desteklenir: "veritabanı", "eloquent"

    
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    Resetting Passwords

    Bu korumalar, parola sıfırlama işlemlerinin kullanıcılarının parolasını
    kontrol etmek için kullanılır.
    Ardından, uygulamanız için her parola sıfırlama korumasını tanımlayabilirsiniz.
    Elbette, sizin için harika bir varsayılan yapılandırma tanımlanmıştır
    burada Eloquent kullanıcı sağlayıcısını kullanır.

    Tüm parola sıfırlama sürücülerinin bir kullanıcı sağlayıcısı vardır. Bu, kullanıcı sağlayıcısının
    kullanıcılar aslında veritabanınızdan veya diğer depolama alanlarından alınır
    Kullanıcınızın verilerini kalıcı hale getirmek için bu uygulama tarafından kullanılan mekanizmalar.


    | Desteklenir: "eloquent"

    
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    Password Confirmation Timeout

    Bu korumalar, parola onayı işlemlerinin kullanıcılarının parolasını
    kontrol etmek için kullanılır.
    Ardından, uygulamanız için her parola onayı korumasını tanımlayabilirsiniz.
    burada Eloquent kullanıcı sağlayıcısını kullanır.

    Tüm parola onayı sürücülerinin bir kullanıcı sağlayıcısı vardır. Bu, kullanıcı sağlayıcısının
    kullanıcılar aslında veritabanınızdan veya diğer depolama alanlarından alınır
    Kullanıcınızın verilerini kalıcı hale getirmek için bu uygulama tarafından kullanılan mekanizmalar.

    Burada bir parola onayından önceki saniye miktarını tanımlayabilirsiniz
    zaman aşımına uğrar ve kullanıcıdan parolasını şu yolla yeniden girmesi istenir
    onay ekranı. Varsayılan olarak, zaman aşımı üç saat sürer.
   

    
    */

    'password_timeout' => 10800,

];
