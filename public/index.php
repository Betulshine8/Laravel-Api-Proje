<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
 Check If The Application Is Under Maintenance

 Uygulama "down" komutu aracılığıyla bakım / demo modundaysa
 önceden oluşturulmuş içeriğin gösterilebilmesi için bu dosyayı yükleyeceğiz
 çerçeveyi başlatmak yerine, bir istisnaya neden olabilir.

Örneğin, uygulama çalıştırılırken bir hata oluştuğunda,
önceden oluşturulmuş içeriğin gösterilebilmesi için
bu dosyayı yükleyebiliriz.
Bu dosyayı yükleyebilmek için, "storage/framework/maintenance.php" dosyasının
oluşturulması gerekir.
Bu dosya, "down" komutu aracılığıyla bakım / demo modundaysa
oluşturulur.
Bu dosya, "up" komutu aracılığıyla bakım / demo modundaysa
silinir.


*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
 Register The Auto Loader
 Uygulama için otomatik yükleme yöntemi
 çağrılır.
 Bu yöntem, Laravel'in çalışma alanının
 yüklenmesini sağlar.

Composer, aşağıdakiler için uygun otomatik olarak oluşturulmuş bir sınıf yükleyici sağlar
Bu uygulama. Sadece kullanmamız gerekiyor! Sadece ihtiyacımız olacak
Sınıflarımızı manuel olarak yüklememye gerek yok.




*/

require __DIR__.'/../vendor/autoload.php';

/*
 Run The Application
 Uygulama çalıştırılır.
 Bu yöntem, Laravel'in çalışma alanının
 çalıştırılmasını sağlar.
 Bu yöntem, "artisan" komutlarının
 çalıştırılmasını sağlar.
 Bu yöntem, "route" komutlarının
 çalıştırılmasını sağlar.
 Bu yöntem, "middleware" komutlarının
 çalıştırılmasını sağlar.
 Bu yöntem, "providers" komutlarının
 çalıştırılmasını sağlar.
 Uygulamayı oluşturduktan sonra, gelen isteği şu şekilde ele alabiliriz
 uygulamanın HTTP çekirdeği. Ardından, yanıtı geri göndereceğiz
 bu müşterinin tarayıcısına göndererek uygulamamızdan yararlanmalarını sağlar.
 


*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
