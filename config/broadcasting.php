<?php

return [

    /*
    Default Broadcaster


    Varsayılan yayıncıyı kontrol eder.
    bir olayın yayınlanması gerektiğinde çerçeve. Bunu şu şekilde ayarlayabilirsiniz
    aşağıdaki "connections" dizisinde tanımlanan bağlantılardan herhangi biri.
    Varsayılan: "null"

    | Destekleniyor: "pusher", "ably", "redis", "log", "null"


    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
     Broadcast Connections
     Yayınlanma bağlantılarını tanımlar.
     Varsayılan: []

    Burada kullanılacak tüm yayın bağlantılarını tanımlayabilirsiniz
    olayları diğer sistemlere veya web soketleri üzerinden yayınlamak için. Örnekleri
    Mevcut her bağlantı türü bu dizi içinde sağlanır.
    | Türler: "pusher", "ably", "redis", "log", "null"
    
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'host' => env('PUSHER_HOST') ?: 'api-'.env('PUSHER_APP_CLUSTER', 'mt1').'.pusher.com',
                'port' => env('PUSHER_PORT', 443),
                'scheme' => env('PUSHER_SCHEME', 'https'),
                'encrypted' => true,
                'useTLS' => env('PUSHER_SCHEME', 'https') === 'https',
            ],
            'client_options' => [
                // Guzzle istemci seçenekleri: https://docs.guzzlephp.org/en/stable/request-options.html
            ],
        ],

        'ably' => [
            'driver' => 'ably',
            'key' => env('ABLY_KEY'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
