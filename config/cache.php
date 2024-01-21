<?php

use Illuminate\Support\Str;

return [

    /*
    Default Cache Store

    Bu seçenek, aşağıdaki durumlarda kullanılan varsayılan önbellek bağlantısını kontrol eder
    Bu önbellekleme kütüphanesini kullanıyorum. Bu bağlantı, başka bir bağlantı olduğunda kullanılır.
    belirli bir önbellekleme işlevi yürütülürken açıkça belirtilmez.
    Önbellekleme işlevi, önbellekleme işlevi çalıştırıldığında önbellekteki verileri yürütür.
  

    


    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    Cache Stores
    Burada uygulamanız için tüm önbellek "depolarını" şu şekilde tanımlayabilirsiniz
    ve sürücüleri. için birden fazla mağaza bile tanımlayabilirsiniz.
    önbelleklerinizde depolanan öğe türlerini gruplamak için aynı önbellek sürücüsü.
    
    Önbellek sürücüsünün önbellekleme işlevini yürütür.


     Desteklenen sürücüler: "apc", "array", "database", "file",
     "memcached", "redis", "dynamodb", "octane", "null"

    
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
            'lock_connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'default',
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

    ],

    /*
    Cache Key Prefix
    Bu önbellekteki anahtar ön eki.
    Önbellekteki anahtar ön eki, önbellekteki anahtar ön eki,

   
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache_'),

];
