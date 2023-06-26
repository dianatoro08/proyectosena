<?php require_once 'conexibd.php';

if(isset($_POST["enviaInfoRegistro"]))
{
	$sql="INSERT INTO usuarios
	(tipoDocumentoUsuario,documentoUsuario,nombresUsuario,apellidosUsuarios,telefonoUsuario,correoUsuario,passqordUsuario,estadoUsuario,rol_idRol)
	VALUES
	('".$_POST["tdocumento"]."','".$_POST["numdoc"]."','".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["telefono"]."','".$_POST["correo"]."','".$_POST["contasena"]."','".$_POST["estadoUsuario"]."','".$_POST["rol"]."');";

	if($conn->query($sql)===TRUE)
	{
		header("Location: ../php/formLogin.php");
	}

//echo "".mysqli_fetch_array($result);
	//$conn->query($sql);

/*$sql = "select id_Mascota,Nombre,IdCliente,Tipo_Mascota,Raza 
        from Mascota where idCliente = :idClien";
$sentencia = $conexion->prepare($sql);
$sentencia->bindValue('idClien',$_GET["idCliente"]);
$sentencia->execute();
$resultado= $sentencia-> fetchAll();*/

}
?>