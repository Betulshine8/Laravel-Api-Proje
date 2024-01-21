<?php

use Illuminate\Support\Str;

return [

    /*
    Default Session Driver

     Bu seçenek, aşağıdaki durumlarda kullanılacak varsayılan oturum "sürücüsünü" kontrol eder
     istekleri. Varsayılan olarak, hafif yerel sürücüyü kullanacağız ancak
     burada sağlanan diğer harika sürücülerden herhangi birini belirtebilir.
    
     Desteklenir: "dosya", "çerez", "veritabanı", "apc",
     "memcached", "redis", "dynamodb", "array"
   
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
     Session Lifetime
     Oturum süresi
     Oturum süresi, oturumun kullanım süresini belirler.
     Bu değer, oturumun kullanım süresini belirler.
   
     Burada oturumun kaç dakika sürmesini istendiği belirtebilir
     süresi dolmadan önce boşta kalmasına izin verilmeli. Eğer onlar istiyorsa
     tarayıcı kapandığında hemen sona ermesi için bu seçeneği ayarlanması gerek .
  
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
      Session Encryption

    Bu seçenek, tüm oturum verilerinizi kolayca belirlemenizi sağlar
    depolanmadan önce şifrelenmelidir. Tüm şifreleme çalıştırılacak
    ise bu seçenek true olmalı.
    Laravel tarafından otomatik olarak ayarlanır ve Session'ı normal şekilde kullanabilir.



    */

    'encrypt' => false,

    /*
     Session File Location
     Oturum dosya konumu
     Oturum dosya konumu, oturum dosyalarının yerleştirileceği yer.
     Bu değer, oturum dosyalarının yerleştirileceği yer.
     Yerel oturum sürücüsünü kullanırken, oturum
     dosyaları depolanabilir. Sizin için bir varsayılan ayarlanmıştır ancak farklı bir
     konum belirtilebilir. Bu yalnızca dosya oturumları için gereklidir.
     Örneğin, Redis oturum sürücüsünü kullanırken, oturum
     dosyaları depolanmaz.

    
    
    */

    'files' => storage_path('framework/sessions'),

    /*
     Session Database Connection
     Oturum veritabanı bağlantısı
     Oturum veritabanı bağlantısı, oturum verilerinin depolandığı veritabanı bağlantısı.
     Bu değer, oturum verilerinin depolandığı veritabanı bağlantısı.
     Yerel oturum sürücüsünü kullanırken, oturum
     verilerinin depolanması depolanmaz. Sizin için bir varsayılan ayarlanmıştır ancak farklı bir,
     bağlantı belirtilebilir. Bu yalnızca veritabanı oturumları için gereklidir.
     Örneğin, Redis oturum sürücüsünü kullanırken, oturum
     verilerinin depolanması depolanmaz.

    
    
     "veritabanı" veya "redis" oturum sürücülerini kullanırken, bir
     bu oturumları yönetmek için kullanılması gereken bağlantı. Bu olmalıdır
     veritabanı yapılandırma seçeneklerinizdeki bir bağlantıya karşılık gelir.
    

    
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
     Session Database Table
     Oturum veritabanı tablosu
     Oturum veritabanı tablosu, oturum verilerinin depolandığı veritabanı tablosu.

   "Veritabanı" oturum sürücüsünü kullanırken, kullanacak tablo belirtebilir,
    oturumları yönetmek için kullanmalıyım.
    
    */

    'table' => 'sessions',

    /*
     Session Cache Store
     Oturum çerez depolama
     Oturum çerez depolama, oturum çerezlerinin depolandığı depolama.
     Bu değer, oturum çerezlerinin depolandığı depolama.
     Yerel oturum sürücüsünü kullanırken, oturum
     çerezlerinin depolanması depolanmaz. Sizin için bir varsayılan ayarlanmıştır ancak farklı bir,
     depolama belirtilebilir. Bu yalnızca çerez oturumları için gereklidir.
      Redis oturum sürücüsünü kullanırken.

     Çerçevenin önbellek odaklı oturum arka uçlarından birini kullanırken
     bu oturumlar için kullanılması gereken bir önbellek deposunu listeler. Bu değer
     uygulamanın yapılandırılmış önbellek "depolarından" biriyle eşleşmelidir.
    
     Etkiler: "apc", "dynamodb", "memcached", "redis"

    
    */

    'store' => env('SESSION_STORE'),

    /*
   Session Sweeping Lottery
   Oturum kayıt olasılığı
   Oturum kayıt olasılığı, oturum kayıt olasılığını belirler.
   Bu değer, oturum kayıt olasılığını belirler.
   Örneğin, oturum kayıt olasılığının %50'ini belirtebilir.
  
   Bazı oturum sürücülerinin depolama konumlarını manuel olarak süpürmesi gerekir
   Depodaki eski oturumlardan kurtulun. İşte bunun gerçekleşme olasılığı
   Belirli bir istek üzerine gerçekleşir. Varsayılan olarak, olasılıklar 100 üzerinden 2'dir.



   
    */

    'lottery' => [2, 100],

    /*
    Session Cookie Name
    Oturum çerez adı
    Oturum çerez adı, oturum çerezlerinin depolandığı depolama.
    Bu değer, oturum çerezlerinin depolandığı depolama.
    Yerel oturum sürücüsünü kullanırken, oturum
    çerezlerinin depolanması depolanmaz. Sizin için bir varsayılan ayarlanmıştır ancak farklı bir,
    depolama belirtilebilir. Bu yalnızca çerez oturumları için gereklidir.

    Burada bir oturumu tanımlamak için kullanılan çerezin adını değiştirebilirsiniz
    ID'ye göre örnek. Burada belirtilen ad, bir
    Her sürücü için çerçeve tarafından yeni oturum çerezi oluşturulur.
    
   
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
   Session Cookie Path
   Oturum çerez yolu
   Oturum çerez yolu, oturum çerezlerinin depolandığı depolama.
   Bu değer, oturum çerezlerinin depolandığı depolama.
   Yerel oturum sürücüsünü kullanırken, oturum
   çerezlerinin depolanması depolanmaz. Sizin için bir varsayılan ayarlanır.
   Örneğin, "http://example.com"
   Burada belirtilen yol, bir
   Her sürücü için çerçeve tarafından yeni oturum çerezi oluşturulur.

   Oturum çerezi yolu, çerezin hangi yol için kullanılacağını belirler
   kullanılabilir olarak kabul edilir. Tipik olarak, bu kök yol olacaktır
   uygulamanız ancak gerektiğinde bunu değiştirmekte özgürsünüz.
    
   
    */

    'path' => '/',

    /*
    Session Cookie Domain
    Oturum çerez alanı
    Oturum çerez alanı, oturum çerezlerinin depolandığı depolama.
    Burada bir oturumu tanımlamak için kullanılan çerezin etki alanını değiştirebilir.
    uygulamada. Bu, çerezin hangi etki alanlarında olduğunu belirleyecektir
    uygulamada kullanılabilir. Mantıklı bir varsayılan ayarlı.
    

    */

    'domain' => env('SESSION_DOMAIN'),

    /*
     HTTPS Only Cookies
     HTTPS Sadece Çerezler
     HTTPS Sadece çerezler, oturum çerezlerinin depolandığı depolama.
     Bu değer, oturum çerezlerinin depolandığı depolama.
     Yerel oturum sürücüsünü kullanırken, oturum
     çerezlerinin depolanması depolanmaz. Sizin için bir varsayılan ayarlanır.
     Örneğin, true
     Burada belirtilen değer, bir
     Her sürücü için çerçeve tarafından yeni oturum çerezi oluşturulur.
     Bu değer, çerezin HTTPS olarak kullanılacağını belirler
 
    Bu seçenek true olarak ayarlandığında, oturum çerezleri yalnızca
    Tarayıcının HTTPS bağlantısı varsa sunucuya alır. Bu tutacaktır
     güvenli bir şekilde yapılamadığında çerezin  gönderilmesini engeller.
    
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
     HTTP Access Only
     HTTP Sadece erişim
     HTTP Sadece erişim, oturum çerezlerinin depolandığı depolama.
    
    Bu değerin true olarak ayarlanması JavaScript'in
    değerine sahip olacak ve çerez yalnızca
    HTTP protokolü. Gerekirse bu seçenek değiştirilebilir.


    
    */

    'http_only' => true,

    /*
    Same-Site Cookies
 
    Bu seçenek, siteler arası isteklerde çerezlerinizin nasıl davranacağını belirler
    gerçekleşir ve CSRF saldırılarını azaltmak için kullanılabilir. Varsayılan olarak, biz
    bu değeri "lax" olarak ayarlayacaktır çünkü bu güvenli bir varsayılan değerdir.
    
    Desteklenir: "lax", "strict", "none", null
    
    


   
    */

    'same_site' => 'lax',

];
