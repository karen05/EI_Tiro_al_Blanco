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
//Conexión al a base de datos
include'../conexion/conexion_BD.php' ;
//Se extrae el id del usuario enviado
$id=$_GET["id"];
//Se extrae toda la información del usuario
$sql="select *from Usuarios where id='$id'";
$resultado=mysqli_query($conexion,$sql);

//Recolecta los datos ingresados guardandolos en variables
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    
    $correo=$_POST['txt_correo'];
    $usuario=$_POST['txt_usuario'];
    $contra=$_POST['txt_contra'];

    //Actualiza los datos ingresados en  usuarios  
		$sql2="UPDATE Usuarios set correo='$correo',usuario='$usuario',contra ='$contra' WHERE id='$id'";
	//Se verifica si se puede realizar la acción
		if ($conexion->query($sql2)==TRUE) {
			//Si se puede realizar muestra el siguiente mensaje
			  echo'<script type="text/javascript">
       				 alert("¡Datos Modificados Exitosamente!");
        			 window.location.href="../miCuenta.php";
    			   </script>';
		}else
		//Si no se puede realizar manda este mensaje 
		echo "¡ERROR: No se puede realizar la acción! <br>".$conexion->error;


		}

 ?>