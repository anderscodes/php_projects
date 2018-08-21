<?php

function forwarded_ip() {
  $keys = array(
    'HTTP_X_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_FORWARDED',
    'HTTP_FORWARDED_FOR',
    'HTTP_CLIENT_IP',
    'HTTP_X_CLUSTER_CLIENT_IP'
  );

   foreach($keys as $key) {
     if(isset($_SERVER[$key])) {
       $ip_array = explode(',', $_SERVER[$key]);
       foreach($ip_array as $ip) {
         $ip = trim($ip);
         return $ip;
       }
     }
   }
   return 'None';
}

echo forwarded_ip();

?>
