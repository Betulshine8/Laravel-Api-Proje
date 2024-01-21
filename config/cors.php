<?php

return [

    /*
     Cross-Origin Resource Sharing (CORS) Configuration
   
   Burada çapraz kaynak paylaşımı için ayarlarınızı yapılandırabilirsiniz
   veya "CORS". Bu, hangi çapraz kaynak işlemlerinin yürütülebileceğini belirler
    web tarayıcılarında. 
    
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
