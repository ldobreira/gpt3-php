<?php

//This is your Secret API Key
$secret_key = 'Bearer ******YOUR-KEY-HERE********';

//Making Requests
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.openai.com/v1/engines/ada/completions",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{
        "prompt": "This is a test",
        "max_tokens": 5
    }',
	CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization:' . $secret_key
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>