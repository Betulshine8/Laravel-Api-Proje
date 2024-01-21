<?php

return [

    /*
    Default Mailer
     Bu seçenek, herhangi bir e-posta göndermek için kullanılan varsayılan posta göndericisini kontrol eder
     uygulamanız tarafından gönderilen mesajlar. Alternatif postacılar kurulabilir
     ve gerektiğinde kullanılır; ancak bu posta göndericisi varsayılan olarak kullanılacaktır.
     Bu posta göndericisi, uygulamanızın varsayılan posta göndericisi olarak kullanılacaktır.

    
   
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    Mailer Configurations

    Mailer adı ve konfigürasyonlarının bir dizisi olarak tanımlanır.
    Mailer adı, uygulama için kullanılacak posta göndericisinin adıdır.
    Mailer konfigürasyonları, posta göndericisinin yapılandırmasıdır.
   
    Burada uygulama tarafından kullanılan tüm postacıları ve ayrıca
     ilgili ayarları. Şunlar için birkaç örnek yapılandırılmıştır

    
     Laravel, aşağıdaki durumlarda kullanılmak üzere çeşitli posta "taşıma" sürücülerini destekler

   
    
    | Desteklenir: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    | "postmark", "log", "array", "failover"
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    /*
     Global "From" Address
     Bu seçenek, herhangi bir e-posta göndermek için kullanılan "from" adresini kontrol eder
     uygulamanız tarafından gönderilen mesajlar. Alternatif postacılar kurulabilir
     ve gerektiğinde kullanılır; ancak bu posta göndericisi varsayılan olarak kullanılacaktır.

    Uygulama tarafından gönderilen tüm e-postaların şu adresten gönderilmesi istenebilir.
     aynı adres. Burada, aşağıdaki gibi bir ad ve adres belirtebilebilir.
     uygulama tarafından gönderilen tüm e-postalar için global olarak kullanılır.
   
  
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
     Markdown Mail Settings
     Bu seçenek, Markdown e-posta göndericileri için yapılandırılmıştır.
     Bu seçenek, Markdown e-posta göndericileri için kullanılacak ayarlarını kontrol eder
     uygulama tarafından gönderilen mesajlar. Alternatif postacılar kurulabilir
     ve gerektiğinde kullanılır; ancak bu posta göndericisi varsayılan olarak kullanılacaktır.

     Markdown tabanlı e-posta oluşturma kullanıyorsanız
     tema ve bileşen yolları burada, tasarımı özelleştirmenize olanak tanır
     E-postaların |. Ya da Laravel varsayılanlarına sadık kalabilirsiniz!

   
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
