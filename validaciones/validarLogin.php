<?php
include '../conexion/conexion_BD.php' ;
session_start();
// se obtienen los valores ingresados en el Login 
if($_SERVER["REQUEST_METHOD"]=="POST"){ 

	$usuario=$_POST["usuario"]; 
	$password=$_POST["pw"];

    
if(($sql="SELECT *FROM Usuarios WHERE usuario='$usuario' AND contra='$password'")==True){
    
    $res=$conexion->query($sql);
	if($res->num_rows>0){
 		//Se redirecciona al área correspondiente
		$f=$res->fetch_assoc();
		$_SESSION["usuario"]=$f["usuario"];
		header('Location:../Juego.php');
	}
	else{
		//En caso de no encontrar coincidencia mostrará el siguiente mensaje
		echo'<script type="text/javascript">
			alert("¡ ERROR: Datos incorrectos !");
			window.location.href="../index.html";
   		    </script>';
		}
}
}
?>