<?php

use Illuminate\Support\Str;

return [

    /*
    Default Database Connection Name
    Burada aşağıdaki veritabanı bağlantılarından hangisini istediğinizi belirtebilirsiniz
    tüm veritabanı çalışmaları için varsayılan bağlantınız olarak kullanmak üzere. Tabii ki
    Veritabanı kütüphanesini kullanarak aynı anda birçok bağlantı kullanabilirsiniz.

     Supported: "mysql", "pgsql", "sqlite", "sqlsrv"

    
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    Database Connections
    Burada aşağıdaki veritabanı bağlantılarından hangisini istediğinizi belirtebilirsiniz
    tüm veritabanı çalışmaları için varsayılan bağlantınız olarak kullanmak üzere. Tabii ki
    Veritabanı kütüphanesini kullanarak aynı anda birçok bağlantı kullanabilirsiniz.

     İşte uygulamanız için ayarlanmış veritabanı bağlantılarının her biri.
     Tabii ki, her bir veritabanı platformunu yapılandırma örnekleri
    Laravel tarafından desteklenen | geliştirmeyi basitleştirmek için aşağıda gösterilmiştir.
 

     Laravel'deki tüm veritabanı çalışmaları PHP PDO olanakları aracılığıyla yapılır
     bu nedenle, kendi veritabanınız için sürücüye sahip olduğunuzdan emin olun.
     seçimini geliştirmeye başlamadan önce makinenize yükleyin.


   
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*

    Migration Repository Table
    Bu tablo, aşağıdakiler için halihazırda çalışmış olan tüm geçişlerin kaydını tutar
    Başvurunuz. Bu bilgileri kullanarak, aşağıdakilerden hangisini belirleyebiliriz
    Diskteki geçişler aslında veritabanında çalıştırılmamıştır.
    Bu tabloda, geçişlerin kaydını tutar.


    */

    'migrations' => 'migrations',

    /*
     Redis Databases
     Bu veritabanı bağlantılarından hangisini istediğinizi belirtebilirsiniz
     tüm veritabanı çalışmaları için varsayılan bağlantınız olarak kullanmak üzere. Tabii ki
     Veritabanı kütüphanesini kullanarak aynı anda birçok bağlantı kullanabilirsiniz.
     İşte uygulamanız için ayarlanmış veritabanı bağlantılarının her biri.
     Tabii ki, her bir veritabanı platformunu yapılandırma örnekleri
     Laravel tarafından desteklenen | geliştirmeyi basitleştirmek için aşağıda gösterilmiştir.
     Laravel'deki tüm veritabanı çalışmaları PHP PDO olanakları aracılığıyla yapılır
     bu nedenle, kendi veritabanınız için sürücüye sahip olduğunuzdan emin olun.
     seçimini geliştirmeye başlamadan önce makinenize yükleyin.
     
  
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
