<?php

require_once __DIR__ . '/init.php';
require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/core/classes/AutoloadClass.php';

use Core\Classes\AutoloadClass;
use Core\Classes\ControllerClass;
use Core\Classes\CurlClass;
use Core\Classes\ConnectTmpl;

// autoload
AutoloadClass::load();


$files = new ControllerClass(PATH_TO_INPUT_SMALL);
////parsing files, return domain and rang
$data = $files->getData();

array_unique($data);
arsort($data);
$data = array_slice($data, 0, DOMAIN_QTY);

$curl = new CurlClass($data);
////get response status and time for answer from server, and make full array info
$result = $curl->getStatus();

//connect tmpl
ConnectTmpl::getTmpl(PATH_TO_MAIN_VIEW, 'show-domains', $result);