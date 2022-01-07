<?php
$apiKey             = '0228037591c4ba72faa01c1adbeb6c01'; // Your api key
$merchantCode       = isset($_POST['merchantCode']) ? $_POST['merchantCode'] : null; 
$amount             = isset($_POST['amount']) ? $_POST['amount'] : null; 
$merchantOrderId    = isset($_POST['merchantOrderId']) ? $_POST['merchantOrderId'] : null; 
$productDetail      = isset($_POST['productDetail']) ? $_POST['productDetail'] : null; 
$additionalParam    = isset($_POST['additionalParam']) ? $_POST['additionalParam'] : null; 
$paymentMethod      = isset($_POST['paymentCode']) ? $_POST['paymentCode'] : null; 
$resultCode         = isset($_POST['resultCode']) ? $_POST['resultCode'] : null; 
$merchantUserId     = isset($_POST['merchantUserId']) ? $_POST['merchantUserId'] : null; 
$reference          = isset($_POST['reference']) ? $_POST['reference'] : null; 
$signature          = isset($_POST['signature']) ? $_POST['signature'] : null; 

if(!empty($merchantCode) && !empty($amount) && !empty($merchantOrderId) && !empty($signature))
{
    $params = $merchantCode . $amount . $merchantOrderId . $apiKey;
    $calcSignature = md5($params);

    if($signature == $calcSignature)
    {
        //Your code here
        echo "SUCCESS"; // Please response with success
    }
    else
    {
        throw new Exception('Bad Signature');
    }
}
else
{
    throw new Exception('Bad Parameter');
}
?>
