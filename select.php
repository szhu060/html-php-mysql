<?php

$servername = 'localhost';  // mysql服务器主机地址
$username = 'root';            // mysql用户名
$password = 'root';   
$conn = new PDO("mysql:host=$servername;dbname=goods", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
$name = $_GET['name'];

$stmt = $conn->prepare("SELECT productQuantity FROM q4 where productId = :id and productName = :name"); 
$stmt->execute(
array(
	':id' => $id,
	':name' =>$name
)
);

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result = $res[0]['productQuantity'];
// $result = array(
// 	'message' => $str
// );

echo json_encode($result);



// $affected_rows = $stmt->rowCount();
// return $affected_rows;

?>