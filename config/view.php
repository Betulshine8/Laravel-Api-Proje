<?php

return [

    /*
     View Storage Paths
     Çoğu şablonlama sistemi şablonları diskten yükler. Burada şunlar belirtilebilir.
     görünümleriniz için kontrol edilmesi gereken bir dizi yol. Tabii ki
     Her zamanki Laravel görünüm yolu sizin için zaten kaydedilmiştir.



 
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
     Compiled View Path
     Çoğu şablonlama sistemi şablonları diskten yükler. Bu yöntemde
     şablonlarınızın kompilasyonu için bir dizi yol belirtilmeli.
     Bu yöntemde kaydedildi.
  
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
