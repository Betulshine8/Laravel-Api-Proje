/**
 Kolayca istek göndermeyi sağlayan axios HTTP kütüphanesi yükleme 
 Laravel arka ucuna *. Bu kütüphane otomatik olarak
"XSRF" belirteç çerezinin değerine dayalı bir başlık olarak CSRF belirteci.
 Bu CSRF belirteci, Laravel arka ucumuza gönderilen isteklerin
  

 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 Echo, kanallara abone olmak ve dinlemek için etkileyici bir API sunar
 Laravel tarafından yayınlanan olaylar için. Echo ve olay yayını
 Ekibin kolayca sağlam gerçek zamanlı web uygulamaları oluşturmasına olanak tanır.
 
 Laravel tarafından yayınlanan olaylar için Echo etkileyici bir API sunar.
 Bu API, Laravel arka ucumuza gönderilen istekler.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
