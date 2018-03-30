<?php

$re_name = $_REQUEST['name_tophp'];
$re_password = $_REQUEST['password_tophp'];

if ($re_name == "zhushi" && $re_password == "123456"){
	$response = array(
	"name_tophp" => $re_name,
	"password_tophp" => $re_password,
);

echo json_encode($response);

}





?>