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

$remote_ip = $_SERVER['REMOTE_ADDR'];
$forwarded_ip = forwarded_ip();

?>

Remote IP Address: <?php echo $remote_ip; ?>
<br />
<br />

<?php if($forwarded_ip != '') { ?>
  Forwarded For: <?php echo $forwarded_ip; ?>
  <br />
  <br />
<?php } ?>
