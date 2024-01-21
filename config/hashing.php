<?php

return [

    /*
     
    Default Hash Driver

     Bu seçenek, hash için kullanılacak varsayılan hash sürücüsünü kontrol eder
     uygulama için. Varsayılan olarak, bcrypt algoritması kullanılır;
     için parolalar. Varsayılan olarak, bcrypt algoritması
     kullanılır;.

    
    | Destekler: "bcrypt", "argon", "argon2id"
   
    */

    'driver' => 'bcrypt',

    /*
     Bcrypt Options
     Bu seçenek, parolaları hashleyen bir sürücü için kullanılacak
     parametreleri kontrol eder.

    Burada, aşağıdaki durumlarda kullanılması gereken yapılandırma seçeneklerini belirtebilirsiniz
    şifreler Bcrypt algoritması kullanılarak karma hale getirilir. Bu size izin verecektir
    verilen parolayı hash etmek için gereken süreyi kontrol etmek için.
    
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    Argon Options
    Bu seçenek, parolaları hashleyen bir sürücü için kullanılacak
    parametreleri kontrol eder.

    Burada, aşağıdaki durumlarda kullanılması gereken yapılandırma seçeneklerini belirtebilirsiniz
    şifreler Argon algoritması kullanılarak karma hale getirilir. Bu size izin verecektir
    verilen parolayı hash etmek için gereken süreyi kontrol etmek için.

     Burada, aşağıdaki durumlarda kullanılması gereken yapılandırma seçeneklerini belirtebilirsiniz
     Şifreler Argon algoritması kullanılarak karma hale getirilir. Bunlar size izin verecektir
     verilen parolayı hash etmek için gereken süreyi kontrol etmek için.
    
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
    ],

];
