<?php 
$accessToken = EAAEt17YsKAMBAEPXv54GDOZCmeiOAUv0KhW5LcuuKnwNC0VDmyuXgn1VIWVJ0tpkH0v6ZCHZC9zZCyZB0UuZAvUjgOE01VPIElPx2q31vqY8EqMPXWfvNmevX3l2WXQuRm7tMhITRThYpzEIqUiINP5LuyQvOO6zDJoL6yUwIHEQZDZD;

if(isset($_REQUEST['hub_challenge'])){
	$c = $_REQUEST['hub_challenge'];
	$v = $_REQUEST['hub_verify_token'];
}

if($v == "abc123"){
	echo $c;
}

$input = json_decode(file_get_contents('php://input'), ture);

$userID = $input['entry'][0]['messaging'][0]['sender']['id'];

$message = $input['entry'][0]['messaging'][0]['message']['text']; 

echo $userID." and ".$message;

$url = "https://graph.facebook.com/v2.6/me/messages?access_token=$accessToken";

$jsonData = "{
	'recipient': {
		'id':$userID
	},
	'message': {
		'text': 'Hi'
	}
}";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, ture);
curl_setopt($ch, CURLPOT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLPOT_HTTPHEADER, ['Content-Type: application/json']);

if(!empty($input['entry'][0]['messaging'][0]['message'])){
	curl_exec($sch);
}
?>
