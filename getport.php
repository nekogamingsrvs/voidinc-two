<?php
 /**
  * PHP Get Port
  *
  * Gets if port is open on an address.
  *
  * PHP version 7
  *
  * LICENSE: This source file is subject to version 3.01 of the PHP license
  * that is available through the world-wide-web at the following URI:
  * http://www.php.net/license/3_01.txt. If you did not receive a copy of
  * the PHP License and are unable to obtain it through the web, please
  * send a note to license@php.net so we can mail you a copy immediately.
  *
  * @category  Networking
  * @package   GetPort
  * @author    thakyZ <thakyz@voidinc.net>
  * @copyright 2017-2018 Void Inc.
  * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
  * @version   Git: 1.0
  * @link      https://voidinc.net/
  * @since     File available since Release 1.0 
  */

  $debug = true;
  $site = '199.168.141.221';
  $port = $_POST['port'];

  $check = fsockopen("$site", "$port", $errno, $errstr, 6);

if (! $check) {
    if ($debug) {
        echo "Error #$errno : $errstr <br>";
    }
    echo "Offline";
} else {
    echo "Online";
}
?>
