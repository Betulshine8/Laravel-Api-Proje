<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    Default Log Channel
    Bu seçenek yazarken kullanılacak varsayılan günlük kanalını tanımlar
    mesajları günlüklere aktarır. Bu seçenekte belirtilen ad aşağıdakilerle eşleşmelidir
    "channels" yapılandırma dizisinde tanımlanan kanallardan biri.
    "stack" yapılandırma dizisinde tanımlanan kanallardan biri.
    "single" yapılandırma dizisinde tanımlanan kanallardan biri.
    "daily" yapılandırma dizisinde tanımlanan kanallardan biri
    "slack" yapılandırma dizisinde tanımlanan kanallardan biri.
    "syslog" yapılandırma dizisinde tanımlanan kanallardan biri
    "errorlog" yapılandırma dizisinde tanımlanan kanallardan biri
    "monolog" yapılandırma dizisinde tanımlanan kanallardan biri.
    "custom" yapılandırma dizisinde tanımlanan kanallardan biri.
    "null" yapılandırma dizisinde tanımlanan kanallardan biri

    
   

    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*

    Deprecations Log Channel
    Bu seçenek, uyarıları günlüğe kaydetmek için kullanılması gereken günlük kanalını kontrol eder
    Kullanımdan kaldırılan PHP ve kütüphane özellikleri ile ilgili. Bu, şunları elde etmenizi sağlar
    Uygulamanızı bağımlılıkların gelecek ana sürümleri için hazırlayın.
    "channels" yapılandırma dizisinde tanımlanan kanallardan biri.
    "stack" yapılandırma dizisinde tanımlanan kanallardan biri.


    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => false,
    ],

    /*
    Log Channels

    Burada uygulamanız için günlük kanallarını yapılandırabilirsiniz. Dışında
    Laravel kutudan çıktığında Monolog PHP loglama kütüphanesini kullanır. Bu verir
    Kullanabileceğiniz çeşitli güçlü günlük işleyicileri / biçimlendiricileri.
     
    Mevcut Sürücüler: "single", "daily", "slack", "syslog",
    "errorlog", "monolog",
    "özel", "yığın"

    "single" yapılandırma dizisinde tanımlanan kanallardan biri.
    "daily" yapılandırma dizisinde tanımlanan kanallardan biri
    
  
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
            'replace_placeholders' => true,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => LOG_USER,
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];
