
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
  <?php // Guarda los datos que se ingresaron en el formulario
	include'../conexion/conexion_BD.php' ;
	/*Datos del Usuario*/
  	
    $correo=$_POST['txt_correo'];
    $usuario=$_POST['txt_usuario'];
    $contra=$_POST['txt_contra'];    

    $sqlUsuario = " INSERT INTO Usuarios (correo,usuario,contra)VALUES('$correo','$usuario','$contra')";

    $queryU = mysqli_query($conexion,$sqlUsuario); // hace la conexion a la base de datos con los datos incroducidos

   if($queryU){  //Si las sentencias son correctas se ejecuta la insercción
      echo'<script type="text/javascript">
              alert("¡Registro exitoso!");
              window.location.href="../Juego.html";
          </script>';
    }else{
      echo "¡ERROR: No se puede realizar la acción! <br>".$conexion->error;
    }

 ?>

 

 
