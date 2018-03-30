<?php

$servername = 'localhost';  // mysql服务器主机地址
$username = 'root';            // mysql用户名
$password = 'root';   
$conn = new PDO("mysql:host=$servername;dbname=goods", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];


$stmt = $conn->prepare("DELETE FROM q4 WHERE productId = :id"); 
$stmt->execute(
array(
	':id' =>$id
)
);



$affected_rows = $stmt->rowCount();
if($affected_rows == 0 ){
	$str = 'delete fails';
}else{
	$str = 'delete successfully';
}



echo json_encode($str);

?>