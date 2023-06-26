<?php require_once 'conexibd.php';

$id = $_POST["id"];
$estadoPQR = $_POST["estado"];
$documento = $_POST["documento"];

$sql = "update formulario_pqr set estadoPQR = '".$estadoPQR."' where id_pqr = ".$id;

//echo "". $sql;
if($conn->query($sql) === TRUE)
{
	echo "ok";
	//echo json_encode("ok");
	exit;
}else
{
 	echo "fail";
}
?>
