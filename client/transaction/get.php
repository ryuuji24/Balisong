<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/ubpapi-dev/sb/api/RESTs/getAccount?account_no=000000020000",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
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
	$data = json_decode($response);
	echo $response;
	echo "<br>";
	echo $data[0]->{'account_no'};
	echo "<br>";
	echo $data[0]->{'currency'};
	echo "<br>";
	echo $data[0]->{'account_name'};
	echo "<br>";
	echo $data[0]->{'status'};
	echo "<br>";
	echo $data[0]->{'avaiable_balance'};
	echo "<br>";
	echo $data[0]->{'current_balance'};
	
}

?>