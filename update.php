<?php

$servername = 'localhost';  // mysql服务器主机地址
$username = 'root';            // mysql用户名
$password = 'root';   
$conn = new PDO("mysql:host=$servername;dbname=goods", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
$cur = $_GET['cur'];


$stmt = $conn->prepare("UPDATE q4 SET productQuantity=:cur WHERE productId=:id"); 
$stmt->execute(
array(
	':cur' => $cur,
	':id' =>$id
)
);



$affected_rows = $stmt->rowCount();
if($affected_rows == 0 ){
	$str = 'update fails';
}else{
	$str = 'update successfully';
}



echo json_encode($str);

?>