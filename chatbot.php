<?php 
if(isset($_REQUEST['hub_challenge'])){
	$c = $_REQUEST['hub_challenge'];
	$v = $_REQUEST['hub_verify_token'];
}

if($v == "abc123"){
	echo $c;
}

$input = file_get_contents('php://input');
var_dump($input);
?>