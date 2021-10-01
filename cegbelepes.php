<?php

session_start();


$email = $_POST['email'];
$jelszo = $_POST['jelszo'];

if($email&&$jelszo)
{
	$kapcsolodas = mysqli_connect('localhost','root','');
	$adatbazis = mysqli_select_db($kapcsolodas,'szakmaigyak');
	
	$query = mysqli_query($kapcsolodas,"SELECT * FROM ceg_db WHERE email='$email'");
	$numrows = mysqli_num_rows($query);
	if($numrows!=0){
		while($rows = mysqli_fetch_assoc($query))
		{
			$dbemail= $rows['email'];
			$dbjelszo= $rows['jelszo'];
			$titkositottjelszo= md5($jelszo);
		}
		if($email==$dbemail && $titkositottjelszo==$dbjelszo){
			$_SESSION['email']=$email;
			echo "BEJELENTKEZTÉL! A felhasználó oldal <a href='cegfelhasznalo.php'>itt</a> érhető el! ";
		}else{
			die("Hibás a jelszó!");
		}
	}
	else{
		die("Email cím nem létezik!");
	}
}
else
{

die ("Hiányzik az email cím vagy a jelszó!");
	
}


?>