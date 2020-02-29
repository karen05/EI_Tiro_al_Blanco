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
  <html>
<head>
<?php 
session_start();
	if(isset($_SESSION["usuario"])){
		//ejecuta el html desde el body 
	}else{
		header("Location:index.html");
	}
 ?>
	<title>Usuario</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" >
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link  rel="stylesheet" href="css/estiloCuenta.css">
	</head>
<body style="background:#273746" >

<audio id="audio1" src="Canciones/inside-the-castle.mp3"></audio>
<div>
  <p onmousemove="document.getElementById('audio1').play()">.</p>
</div> 

<?php
include'conexion/conexion_BD.php' ; 
	$sqluser="$_SESSION[usuario]";

	$du="SELECT *from Usuarios where usuario ='$sqluser'"   ;
	$resultadoU=mysqli_query($conexion,$du);



?>
<a onclick="return confirm('¿Seguro que desea elimar su Cuenta?')" href="validaciones/cerrarSesion.php"><input class="boton"type="button" style="padding:1.5%;float: right;background-color:teal;color:bisque" value="Cerrar Sesion"></a>
<a  href="Juego.php"><input class="boton" type="button" style="padding:1.5%;float: right; background-color:teal;color:bisque" value="Jugar"></a>
<a  onclick="document.getElementById('audio1').pause()"><input class="boton" type="button" style="padding:0.5%;float: left;background-color:teal;color:bisque" value="Pausar Musica"></a>
<a  onclick="document.getElementById('audio1').play()"><input class="boton" type="button" style="padding:0.5%;float: left; background-color:teal;color:bisque" value="Musica"></a>
<br>
<center><br><br>
<h1 style="color:white">Datos Personales </h1>

<!-- ---------Para la tabla principal ------------- --->
<div class="row table-responsive">
		<table  style="background:#ddd;" border="4">
			<thead >
				<tr>
                    <th scope="col">id Usuario</th>
					<th scope="col">Correo</th>
         		    <th scope="col">Usuario</th>
         		    <th scope="col">Contraseña</th>  
                     <th scope="col">Opciones</th>  
				</tr>

			</thead>
			<tbody>
				<?php 	while ($filas=mysqli_fetch_assoc($resultadoU)) {  ?>
				<tr> 
                   
                    <td><?php echo $filas["id"]  ?></td>
                    <td><?php echo $filas["correo"]  ?></td>
					<td><?php echo $filas["usuario"] ?></td>                      
                    <td><?php echo $filas["contra"]  ?></td>
                    
                    <td>
                    <!--Opción Eliminar -->               
                    <a onclick="return confirm('¿Seguro que desea eliminar su Cuenta?')"  href="CRUD/eliminarUsuario.php?id=<?php echo $filas['id']?>"> <i class="material-icons">delete</i></a>
                    <!--Opción Modificar -->
                    <a style="cursor:pointer;" onclick="document.getElementById('id=<?php echo $filas['id']?>').style.display='block'"  ><i class="material-icons">edit</i></a>


<div class="w3-container ">			
<!----- Para mandar a traer el modal del formularo de modificr terapeuta----- --->
 
  <div id="id=<?php echo $filas['id']?>"  class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom"> 
        <span onclick="document.getElementById('id=<?php echo $filas['id']?>').style.display='none'" 
        class="w3-button w3-display-topright" style="background-color: #DF2648" description="Dar clic para cerrar">&times;</span>
	
		<div class="modal-header" style="background-color:teal; color:white" >
			<h3 style="text-align:center">MODIFICAR USUARIO</h3>
		</div><br>


	<div class="w3-container">
			<form class="form-horizontal" method="POST" action="CRUD/modificarUsuario.php?id=<?php echo $filas['id']?>" >
    	
            <center>
            <label for="correo">Correo:<input type="email" class="form-control" id="email" name="txt_correo" value="<?php echo $filas['correo'] ?>" required></label>
            <br><br>
            <label for="contra">Usuario:<input type="text" class="form-control" id="usuario" name="txt_usuario" value="<?php echo $filas['usuario']?>" required></label>
            <br><br>
            <label for="contra" class="col-sm-2 control-label">Contraseña:<input type="text" class="form-control" id="contra" name="txt_contra" value="<?php echo $filas['contra']?>" required></label>
			<br><br></center>
		   
				<div class="modal-footer" style="background-color: #E1E1E1  " >
						<center>				
                            <a href="miCuenta.php" type="button" >Cancelar</a>
                            <button type="submit" style="background-color:grey">Modificar</button>
						</center>
				</div>
			 </form>
			</div>
		</div>
	</div>
 </div> <!--Fin contenedor principal de modificar -->
                    </td>
			     </tr>
			  <?php }  ?>
			</tbody>
		</table>		
 </div> <!--Fin del contenedor de la primera tabla -->
 <br><br><br>
 </center>



</body>
</html>
