<?php

session_start();

if(isset($_SESSION['email'])){
	
	echo "Üdv, az oldaladon itt az email címed: ".$_SESSION['email']."";
	echo "<a href='diakkijelentkezes.php'>Kijelentkezés!</a>";

	
}else{
	
	die("Illegális behatolás! Bejelentkezés <a href='diakbelepes.php'>itt</a>");
	
}



?>