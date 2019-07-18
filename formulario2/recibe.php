<?php
	include("conex.php");
	$link = conectar();
	
	$rut 				= $_REQUEST['txt_rut'];
	$dv 				= $_REQUEST['txt_dv'];
	$nombre			=	$_REQUEST['txt_nombre'];
	$email			=	$_REQUEST['txt_email'];
	$sexo				=	$_REQUEST['txt_sexo'];
	$comentario	=	$_REQUEST['txt_com'];
	$comuna			=	$_REQUEST['txt_comuna'];
	$estado 		= 1;
	
	echo "RUT: ".$rut."-".$dv."<br>";
	echo "Nombre: ".$nombre."<br>";
	echo "Email: ".$email."<br>";
	echo "Sexo: ".$sexo."<br>";
	echo "Comentario: ".$comentario."<br>";
	echo "Comuna: ".$comuna."<br>";
	
	$consulta = "INSERT INTO personas
							(per_rut, per_dv, per_nombre, per_email, per_sexo, per_comentario, per_comuna, per_estado)
							VALUES
							('$rut','$dv','$nombre','$email','$sexo','$comentario','$comuna','$estado')";
	
	mysql_query($consulta, $link);
	mysql_close();
?>