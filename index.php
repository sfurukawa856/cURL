<?php

/**
 * WebAPIにポストする関数
 * 仮でresponse.phpをリクエスト先とする
 */

// POST先
$url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']) . '/response.php';
// リクエストボディ
$params = [
	'name' => '山田太郎',
	'age' => '25',
	'gender' => 'man'
];

//  cURL開始
$curl = curl_init($url);

curl_setopt_array($curl, [
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => $params,
	CURLOPT_RETURNTRANSFER => true,
]);

$apiResponse = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

print_r($apiResponse, $err);
