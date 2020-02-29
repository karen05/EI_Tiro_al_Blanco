<!-- 
Integrantes:
Avila Hernandez Kevin
Ocampo Giles Karen Lizeth
Pérez Ramos Diana Areli
Ríos Contreras Israel

Materia: Herrmanientas Web
Maestra: Rosario Huerta Eloisa
Grpo: 7B Informática
-->
<?php
        include'../conexion/conexion_BD.php' ;

    	$id=$_GET["id"];
	
		$sql1="DELETE FROM Usuarios WHERE id='$id' "; 
		
		// sí la sentencia es correcta se elimia el registro
		if ($conexion->query($sql1)==TRUE) {
			  echo'<script type="text/javascript">
						alert("Cuenta eliminada!!");
						window.location.href="../index.html";
					</script>';
		}else
		echo'<script type="text/javascript">
				alert("¡ERROR: No se elimino la cuenta!");
				window.location.href="../miCuenta.php";
			</script>';
	

 ?>