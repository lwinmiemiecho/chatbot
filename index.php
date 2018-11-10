<?php 
if(isset($_REQUEST['hub_challenge'])){
	$challenge = $_REQUEST['hub_challenge'];
	$_token = $_REQUEST['hub_verify_token'];
}

if($_token == "myCustomToken123"){
	echo $challenge;
}
 ?>