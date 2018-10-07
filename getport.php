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
  * @link      https://voidinc.net/
  * @since     File available since Release 1.0
  */

  $debug = false;
  $site = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
  $services_json = $_GET['services'];
  error_log(print_r("$services_json", true));
  $services = json_decode($services_json, true);
  error_log(print_r(implode(" ",$services), true));

  $starbound_port = 21025;
  $rust_port = 28015;
  $starmade_port = 4242;
  $unturned_port = 27081;
  $unturned_arena_port = 27084;
  $minecraft1_port = 25565;
  $minecraft2_port = 25566;
  $minecraft3_port = 25567;
  $conan_port = 29092;
  $ark1_port = 27020;
  $ark2_port = 27021;
  $ark3_port = 27022;
  $ark4_port = 37016;
  $ark5_port = 37018;

  foreach ($services as &$service) {
    if ($service == 'starbound') {
      check_running("$starbound_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'rust') {
      check_running("$rust_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'starmade') {
      check_running("$starmade_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'unturned') {
      check_running("$unturned_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'unturned_arena') {
      check_running("$unturned_arena_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'minecraft1') {
      check_running("$minecraft1_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'minecraft2') {
      check_running("$minecraft2_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'minecraft3') {
      check_running("$minecraft3_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'conan') {
      check_running("$conan_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'ark1') {
      check_running("$ark1_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'ark2') {
      check_running("$ark2_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'ark3') {
      check_running("$ark3_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'ark4') {
      check_running("$ark4_port", "$service");
      error_log(print_r("$service", true));
    }
    elseif ($service == 'ark5') {
      check_running("$ark5_port", "$service");
      error_log(print_r("$service", true));
    }
  }

  function check_running($service_port, $service) {
    global $debug;
    global $site;

    $check = fsockopen("$site", "$service_port", $errno, $errstr, 6);

    if (! $check) {
      if ($debug) { echo "Error #$errno : $errstr <br>"; }
      run_update(false, "$service");
      error_log(print_r("Offline", true));
    } else {
      run_update(true, "$service");
      error_log(print_r("Online", true));
    }
  }

  function run_update($state, $service) {
    switch ($service) {
      case "starbound":
        if ($state) {
          echo "
            $(\"#starbound-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#starbound-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "rust":
        if ($state) {
          echo "
            $(\"#rust-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#rust-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "starmade":
        if ($state) {
          echo "
            $(\"#starmade-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#starmade-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "unturned":
        if ($state) {
          echo "
            $(\"#unturned-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#unturned-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "unturned_arena":
        if ($state) {
          echo "
            $(\"#unturned_arena-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#unturned_arena-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "minecraft1":
        if ($state) {
          echo "
            $(\"#minecraft1-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#minecraft1-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "minecraft2":
        if ($state) {
          echo "
            $(\"#minecraft2-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#minecraft2-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "minecraft3":
        if ($state) {
          echo "
            $(\"#minecraft3-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#minecraft3-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "conan":
        if ($state) {
          echo "
            $(\"#conan-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#conan-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "ark1":
        if ($state) {
          echo "
            $(\"#ark1-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#ark1-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "ark2":
        if ($state) {
          echo "
            $(\"#ark2-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#ark2-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "ark3":
        if ($state) {
          echo "
            $(\"#ark3-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#ark3-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "ark4":
        if ($state) {
          echo "
            $(\"#ark4-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#ark4-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
      case "ark5":
        if ($state) {
          echo "
            $(\"#ark5-var\").addClass(\"online\").removeClass(\"pending\").addClass(\"mdi-check-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        } else {
          echo "
            $(\"#ark5-var\").addClass(\"offline\").removeClass(\"pending\").addClass(\"mdi-close-circle\").removeClass(\"mdi-dots-horizontal-circle\");
          ";
        }
        break;
    }
  }
