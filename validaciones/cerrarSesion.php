<?php  //Cierra la sesión que se tenga abierta
 if (session_start()) {
  session_destroy(); 
  header('Location:../index.html');
}
 ?>
