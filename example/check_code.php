<?php

use Mia\Google\Authenticator\GAHelper;
use Mia\Google\Authenticator\GoogleQrUrl;

require '../vendor/autoload.php';

$service = new GAHelper();
$secret = 'ZSNEKQDNC4ZAKKU5';
$code = '983363';

if($service->checkCode($secret, $code)){
    echo 'Is Valid';
} else{
    echo 'Is Incorrect';
}