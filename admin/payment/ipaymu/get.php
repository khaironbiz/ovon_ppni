<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://ipaymu.com/api/v2/payment/direct',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
                'name'              => 'Buyer',
                'phone'             => '081999501092',
                'email'             => 'buyer@mail.com',
                'amount'            => '10000',
                'notifyUrl'         => 'https://mywebsite.com',
                'expired'           => '24',
                'expiredType'       => 'hours',
                'comments'          => 'Catatan',
                'referenceId'       => $_POST['nama'],
                'paymentMethod'     => 'va',
                'paymentChannel'    => 'bri',
                'product[]'         => 'produk 1',
                'qty[]'             => '1',
                'price[]'           => '10000',
                'weight[]'          => '1',
                'width[]'           => '1',
                'height[]'          => '1',
                'length[]'          => '1',
                'deliveryArea'      => '76111',
                'deliveryAddress'   => 'Denpasar'),
    CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'signature: [object Object]',
    'va: 1179001213798746',
    'timestamp: 20191209155701'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;