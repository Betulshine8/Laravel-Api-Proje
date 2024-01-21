<?php

return [

    /*
     Default Filesystem Disk,

     Burada kullanılması gereken varsayılan dosya sistemi diskini belirtebilirsiniz
     Çerçeve tarafından. "Yerel" diskin yanı sıra çeşitli bulut
     tabanlı diskler uygulamanız için kullanılabilir.
     

   
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
     Filesystem Disks
     Burada kullanılması gereken dosya sistemi disklerini belirtebilirsiniz
     Çerçeve tarafından. "Yerel" diskin yanı sıra çeşitli bulut
     tabanlı diskler uygulamanız için kullanılabilir.

    Burada istediğiniz kadar dosya sistemi "diski" yapılandırabilirsiniz ve
    Aynı sürücünün birden fazla diskini bile yapılandırabilirim. Varsayılanlar
    gerekli değerlere örnek olarak her bir sürücü için ayarlanmıştır.
    
     Desteklenen Sürücüler: "local", "ftp", "sftp", "s3"


     'default' => env('FILESYSTEM_DISK', 'local'),

    
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    Symbolic Links
    Burada kullanılması gereken dosya sistemi simge linklerini belirtebilirsiniz
    Çerçeve tarafından. "Yerel" diskin yanı sıra çeşitli bulut
    tabanlı diskler uygulamanız için kullanılabilir.

    Burada, sembolik bağlantıların ne zaman oluşturulacağını yapılandırabilirsiniz.
    `storage:link` Artisan komutu çalıştırılır. Dizi anahtarları şu şekilde olmalıdır
     Bağlantıların konumları ve değerler hedefleri olmalıdır.

    Bu dosya sistemi simge linkleri ile kullanılabilir.
    
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
