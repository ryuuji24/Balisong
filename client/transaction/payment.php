<?php

$curl = curl_init();
$channelid = "BLUEMIX";
$transactionid = "45645654";
$saccount = "000000020000";
$scurrency = "php";
$biller = "ELEC";
$reference1 = "000000000A";
$reference2 = "000000000B";
$reference3 = "000000000C";
$amount = "1500.5";
$fields = "{\"channel_id\":\"".$channelid."\",\"transaction_id\":\"".$transactionid."\",\"source_account\":\"".$saccount."\",\"source_currency\":\"".$scurrency."\",\"biller_id\":\"".$biller."\",\"reference1\":\"".$reference1."\",\"reference2\":\"".$reference2."\",\"reference3\":\"".$reference3."\",\"amount\":".$amount."}";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/ubpapi-dev/sb/api/RESTs/payment",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $fields,
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "content-type: application/json",
    "x-ibm-client-id: 53d93571-2958-457c-aa76-1bf931799cf6",
    "x-ibm-client-secret: bX3wW3sF4dF1eO5eJ7jG5dK6fQ0pL5yF5iQ2wA6qA2wU4jW1dQ"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	$data = json_decode($response,true);
	echo $response;
	echo "<br>";
	echo $data['channel_id'];
	echo "<br>";
	echo $data['transaction_id'];
	echo "<br>";
	echo $data['status'];
	echo "<br>";
	echo $data['confirmation_no'];
	echo "<br>";
	echo $data['error_message'];
	echo "<br>";
}