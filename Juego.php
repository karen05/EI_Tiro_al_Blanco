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

<!DOCTYPE html>
<html lang="en">
<head>
<?php 
session_start();
	if(isset($_SESSION["usuario"])){
		//ejecuta el html desde el body 
	}else{
		header("Location:index.html");
  }
  $sqluser="$_SESSION[usuario]"; /*Para extraer el nombre de usario de quien haya entro al juego*/ 

 ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estiloJuego.css">
    <title>Juego</title>
</head>
<body style="background-color:purple;">

   <center>
         <div> <!--Sección de botones-->
               <a type="button" href="Juego.php" style="float: right;" class="boton">Reiniciar</a> 
               <a type="button" style="float: left;" class="boton"><?php echo $sqluser ?></a> 
               <a title="Da doble click para ir a tu cuenta!" type="button" href="miCuenta.php" style="float: right;" class="boton">Cuenta</a> 
         </div>

         <!--Cuando se active el escenario, se activara la canción del juego-->
    <div onclick="document.getElementById('audio1').play()" id="escenario" style="background:#273746; cursor: crosshair; ">

        <!--Cuando de click a las dianas, estas tendran un sonido como de disparo-->
        <input class="bullseye-input" id="b1" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b1"></label>
      
        <input class="bullseye-input" id="b2" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b2"></label>

        <input class="bullseye-input special" id="b10" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye special" for="b10"></label>
      
       <input class="bullseye-input" id="b3" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b3"></label>
      
        <input class="bullseye-input" id="b4" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b4"></label>
      
        <input class="bullseye-input" id="b5" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b5"></label>
        
        <input class="bullseye-input special" id="b9" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye special" for="b9"></label>
      
        <input class="bullseye-input" id="b6" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b6"></label>
      
        <input class="bullseye-input" id="b7" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye" for="b7"></label>
      
        <input class="bullseye-input special" id="b8" type="checkbox">
        <label onclick="document.getElementById('audio2').play()" class="bullseye special" for="b8" ></label>
    
        <p id="score"  > Puntos</p>
        <a id="inicio" href="#escenario">
          <span class="inicio-text" > ¡Jugar! </span>
        </a>
    
      </div>
  
   </center> 
   <!--Sección de audios del juego-->
   <audio id="audio1" src="Canciones/the-moon-theme.mp3"></audio>
   <audio id="audio2" src="Canciones/audioDisparo.mp3"></audio>

  

</body>
</html>

