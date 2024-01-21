<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    Uygulama Adı
    
     Bu değer uygulama adıdır. Bu değer şu durumlarda kullanılır;
     Çerçevesinin uygulamanın adını bir bildirime yerleştirmesi veya
     Başvuru veya paketlerinin gerektirdiği başka bir yer.
  
    
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
 
     Application Environment

    Bu değer, uygulamanın şu anda bulunduğu "ortamı" belirlemek içindir.
    İçindeki değerler, uygulamanın kullandığı hizmetlerde  çalışıyorum.
     Bu, çeşitli yapılandırmaları nasıl tercih edileceğini belirlemek için.
    Bu değerler, ".env" dosyasında "APP_ENV" değerini kullanır.
    */

    'env' => env('APP_ENV', 'production'),

    /*
    Uygulama hata ayıklama modundayken, ayrıntılı hata mesajları ile
    içinde oluşan her hatada yığın izlerini göstermek için.
    Uygulama hata ayıklama modunda, uygulama çalıştırılırken devre dışı bırakılırsa,
    basit bir genel hata sayfası gösterilir.Bu değeri "false" olarak ayarlayın.


    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
   
     Application URL

     Bu URL, konsol tarafından aşağıdakileri kullanırken URL'leri düzgün bir şekilde oluşturmak için kullanılır
     ("http://localhost" veya "https://example.com").
     Bu değer, ".env" dosyasında "APP_URL" değerini kullanır.
     Artisan komut satırı aracı. Bunu Artisan'ın kök dizinine ayarlanmalı.
     Artisan komut satırının kullanılacağı yer.
     Uygulamanızı Artisan görevlerini çalıştırırken kullanılacak şekilde ayarlanmalı.
    
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    
    Application Timezone

    Burada uygulamanız için varsayılan saat dilimi belirtilebilir.
    Bu değer, ".env" dosyasında "APP_TIMEZONE" değerini kullanır.
    PHP tarih ve tarih-zaman fonksiyonları tarafından kullanılacaktır. 
    Bu, uygulamanın saat dilimi ayarlamasını sağlar.
   

    */

    'timezone' => 'UTC',

    /*
    
    Application Locale Configuration

    Bu değer, uygulamanın varsayılan çeviri dilini belirtir.
    Uygulama yerel ayarı, kullanılacak varsayılan yerel ayarı belirler
    ve uygulama çeviri hizmeti sağlayıcısı tarafından desteklenir.
    Bu değer, ".env" dosyasında "APP_LOCALE" değerini kullanır.
    Uygulama tarafından desteklenecek yerel ayarlardan herhangi birine.
    
    */

    'locale' => 'en',

    /*
    
     Application Fallback Locale
    
     Bu değer, uygulamanın varsayılan çeviri dilini belirtir.Yedek yerel ayar, geçerli yerel ayar kullanıldığında
     kullanılacak yerel ayarı belirtir 
     Bu değer, ".env" dosyasında "APP_FALLBACK_LOCALE" değerini kullanır.
     mevcut değildir. Değeri aşağıdakilerden herhangi birine karşılık gelecek şekilde değiştirebilir.
     Uygulamanız aracılığıyla sağlanan dil klasörleri.

    */

    'fallback_locale' => 'en',

    /*
     Faker Locale

     Bu yerel ayar, Faker PHP kütüphanesi tarafından sahte yerel ayarlar oluşturulurken kullanılacaktır.
    veritabanı  için veri.
    Bu değer, ".env" dosyasında "FAKER_LOCALE" değerini kullanır.
    Faker PHP kütüphanesi, uygulama tarafından kullanılacak sahte veri oluşturucu.
    Örneğin, bu aşağıdakileri elde etmek için kullanılacaktır
    Yerelleştirilmiş telefon numaraları, açık adres bilgileri ve daha fazlası.
  
    */

    'faker_locale' => 'en_US',

    /*
,
    | Encryption Key

     Bu anahtar Illuminate şifreleyici hizmeti tarafından kullanılır ve ayarlanmalıdır
     Bu değer, ".env" dosyasında "APP_KEY" değerini kullanır.
     Bu değer, uygulama için bir anahtar olarak kullanılır.
    rastgele, 32 karakterlik bir dizeye, aksi takdirde bu şifrelenmiş dizeler
    güvenli olmayacaktır.

    
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
     Maintenance Mode Driver
     Bu değer, uygulama bakım modunda kullanılacak hizmeti belirtir.
     Bu değer, ".env" dosyasında "APP_MAINTENANCE_MODE_DRIVER" değerini kullanır.
     Bu değer, uygulama için bir hizmet olarak kullanılır.
     Bu yapılandırma seçenekleri, aşağıdakileri belirlemek için kullanılan sürücüyü belirler
     Laravel'in "bakım modu" durumunu yönetirim. "Önbellek" sürücüsü
     Bakım modunun birden fazla makinede kontrol edilmesini sağlar.
    
     Desteklenen sürücüler: "file", "cache"
    
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    /*
     Autoloaded Service Providers

      Burada listelenen hizmet sağlayıcılar otomatik olarak
    | Başvurunuza talep ediyorum. Kendi hizmetlerinizi eklemekten çekinmeyin
    | Uygulamalarınıza genişletilmiş işlevsellik sağlamak için bu diziyi kullanın.
    | Bu değer, ".env" dosyasında "APP_SERVICE_PROVIDERS" değerini kullanır.
    | Bu değer, uygulama için bir hizmet sağlayıcısı olarak kullanılır.

    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
   Class Aliases
    | Bu sınıf takma adları dizisi, bu uygulama
    | Başladı. Ancak, istediğiniz kadar kayıt yaptırmaktan çekinmeyin.
    | Takma adlar "tembel" olarak yüklenir, böylece performansı engellemezler.
    | Bu değer, ".env" dosyasında "APP_CLASS_ALIASES" değerini kullanır.
    | Bu değer, uygulama için bir takma ad olarak kullanılır.
    | Bu takma adların, uygulama için kullanılacak sınıfların adlarını belirlemek için kullanılır.
    

   
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
