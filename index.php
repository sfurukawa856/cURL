<?php

/**
 * WebAPIにポストする関数
 */

$url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']) . '/response.php';

//  cURL開始
$curl = curl_init($url);

curl_setopt_array($curl, []);
