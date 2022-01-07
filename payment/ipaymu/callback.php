<?php
$curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL             => 'https://my.ipaymu.com/api/v2/transaction',
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_ENCODING        => '',
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 0,
        CURLOPT_FOLLOWLOCATION  => true,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => 'POST',
        CURLOPT_POSTFIELDS      => array('transactionId' => '4719'),
        CURLOPT_HTTPHEADER      => array(
            'Content-Type: application/json',
            'signature: [object Object]',
            'va: 1179001213798746',
            'timestamp: 20191209155701'
            ),
            ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;