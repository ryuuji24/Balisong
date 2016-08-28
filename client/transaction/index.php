<?php

include('../../include/db.php');
	

$targetval = $_POST['target'];
$amountval = $_POST['amount'];

$curl = curl_init();
//inputs
$channelid = "BLUEMIX";
$transac = uniqid();
$transactionid = $transac;
//$source = "000000020000";
$source_id = $_SESSION['sourceid'];
$currency = "php";
//$target = "000000020001";
$target = $targetval;
$targetcurrency = "php";
//$amount = "15";
$amount = $amountval;
//input end

$query = "insert into tbl_transaction values('$channelid','$transactionid','$source_id','$currency','$target','$targetcurrency','$amount')";
$statement = $pdo->query($query);
if($statement){

$fields ="{\"channel_id\":\"".$channelid."\",\"transaction_id\":\"".$transactionid."\",\"source_account\":\"".$source_id."\",\"source_currency\":\"".$currency."\",\"target_account\":\"".$target."\",\"target_currency\":\"".$targetcurrency."\",\"amount\":".$amount."}";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/ubpapi-dev/sb/api/RESTs/transfer",
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
	//output
	$data = json_decode($response,true);
	header('location:../gamification/model/data_model.php?channelid='.$channelid.'&transactionid='.$transactionid.'
	&source_id='.$source_id.'&currency='.$currency.'&target='.$target.'&targetcurrency='.$targetcurrency.'&amount='.$amount.'&q=triggerdata&stat=addexp');
	//output
}
} // end ($statement);

?>