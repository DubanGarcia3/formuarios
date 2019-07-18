<?php
	function conectar(){
		$servidor = "104.154.199.25";
		$usuario	= "root";
		$clave		= "a123";
		$bd				= "formulariosdb";
		
		if(!($link = mysql_connect($servidor,$usuario,$clave))){
			echo "ERROR DE CONEXION CON EL SERVIDOR";
			exit();
		}
		
		if(!mysql_select_db($bd,$link)){
			echo "ERROR DE CONEXION CON LA BASE DE DATOS";
			exit();		
		}
		
		return $link;
	}
?>