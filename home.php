<?php
session_start();

if(isset($_SESSION['estado']) == 'Autenticado')
{
       echo "<a href='logout.php'> Salir </a>";
	}
else
{  
       // Usuario que no se ha logueado
       echo "No tienes permiso para entrar a esta pagina";
      echo "inicia sesion porfavor ";
	echo "<a href='index.php'>aqui</a>";
}  
?>