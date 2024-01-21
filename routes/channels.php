<?php

use Illuminate\Support\Facades\Broadcast;

/*
 Broadcast Channels

Burada tüm etkinlik yayın kanalları kaydedilebilir..
 Bu kanalların kullanıcılarının dinleyebileceği ve dinlemeyeceği durumlar belirlenir.
 Örneğin, bir kullanıcının bir etkinliğinin yayınlanmasını isteyebilir.
uygulama destekler. Verilen kanal yetkilendirme geri aramaları şunlardır
 kimliği doğrulanmış bir kullanıcının kanalı dinleyip dinleyemeyeceğini kontrol etmek için kullanılır.
 



*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
