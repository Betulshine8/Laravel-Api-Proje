<?php

/*
 Create The Application
 Yapacağımız ilk şey yeni bir Laravel uygulama örneği oluşturmak
 Laravel'in tüm bileşenleri için "tutkal" görevi gören ve
 çeşitli parçaların tümünü bağlayan sistem için IoC kapsayıcısı.
 Bu sistem, bileşenlerin bağlantılarını ve bağlantılarının
 yönetilmesini sağlar.
 yapılandırmasını içerir.



*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
 Bind Important Interfaces
Daha sonra, bazı önemli arayüzleri konteynere bağlamamız gerekir, böylece
 Gerektiğinde bunları çözebileceğiz. Çekirdekler şu hizmeti verir
 Bu uygulamaya hem web'den hem de CLI'dan gelen talepler.
 Örneğin, web'den gelen talepler için HTTP kaynaklarının yönetilmesi
 ve HTTP kaynaklarının yönetilmesi.
 Örneğin, CLI'den gelen talepler için.


*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
 Return The Application

 Bu kod, uygulama örneğini döndürür. Örnek şu adrese verilir
 çağıran komut dosyası, böylece örneklerin oluşturulmasını ayırabiliriz
 uygulamanın gerçek çalışmasından ve yanıtların gönderilmesinden.
 



 
*/

return $app;
