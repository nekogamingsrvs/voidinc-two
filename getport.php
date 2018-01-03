<?php
 $debug = true;
 $site = '199.168.141.221';
 $port = $_POST['port'];

 $check = fsockopen("$site", "$port", $errno, $errstr, 6);

 if ( ! $check) {
  if ($debug) {
    echo "Error #$errno : $errstr <br>";
  }
  echo "Offline";
 }
 else {
   echo "Online";
 }
?>
