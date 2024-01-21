<?php

return [

    /*
    
     Default Queue Connection Name
    Laravel'in kuyruk API'si, tek bir kuyruk API'si aracılığıyla çeşitli arka uçları destekler.
     API, aynı API'yi kullanarak her bir arka uca kolay erişim sağlar.
     Örneğin, her bir arka uca kolay erişim sağlayan,
     her bir arka uca kolay erişim sağlayan,
     "sync" kuyruğu, "database" kuyruğu, "beanstalkd" kuyruğu, "sqs" kuyruğu, "redis" kuyruğu ve "null" kuyruğu gibi.
    

    

    */

    'default' => env('QUEUE_CONNECTION', 'sync'),

    /*
     Queue Connections
     Laravel'in kuyruk API'si, tek bir kuyruk API'si aracılığıyla çeşitli arka uçları destekler.
     API, aynı API'yi kullanarak her bir arka uca kolay erişim sağlar.
     Örneğin, her bir arka uca kolay erişim sağlayan,
     her bir arka uca kolay erişim sağlayan,

     Burada her sunucu için bağlantı bilgilerini yapılandırabilirsiniz.
     uygulamanız tarafından kullanılır. Varsayılan bir yapılandırma eklendi
     Laravel ile gönderilen her bir arka uç için. Daha fazlasını eklemekte özgürsünüz.
    
     Sürücüler: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
      Job Batching
      Laravel'in kuyruk API'si, tek bir kuyruk API'si aracılığıyla çeşitli arka uçları destekler.
       Aşağıdaki seçenekler işi depolayan veritabanını ve tabloyu yapılandırır
       yığınlama bilgileri. Bu seçenekler herhangi bir veritabanına güncellenebilir
       uygulama tarafından tanımlanan bağlantı ve tablo.
   
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'job_batches',
    ],

    /*
    Failed Queue Jobs
    Bu seçenekler başarısız kuyruk işi günlüğünün davranışını yapılandırır, böylece
    | işleri depolamak için hangi veritabanının ve tablonun kullanılacağını kontrol edebilirim.
    | Başarısız oldum. Bunları istediğiniz herhangi bir veritabanı / tablo ile değiştirebibilinir.
    | Varsayılan "database" seçeneği kullanılır.
    | Varsayılan "failed" kuyruğu kullanılır.
  

   
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
