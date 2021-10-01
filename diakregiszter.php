<?php

$nev = $_POST['nev'];
$email = $_POST['email'];
$neptun = $_POST['neptun'];
$kar = $_POST['kar'];
$jelszo = $_POST['jelszo'];
$jelszoconfirm = $_POST['jelszoconfirm'];

if($nev&&$email&&$neptun&&$kar&&$jelszo&&$jelszoconfirm){
	if($jelszo==$jelszoconfirm){
		
		$kapcsolodas = mysqli_connect('localhost','root','');
		$adatbazis = mysqli_select_db($kapcsolodas,'szakgyakkeres');
		
		$query= mysqli_query($kapcsolodas,"SELECT * FROM diak WHERE neptunkod='$neptun'");
		$numrows = mysqli_num_rows($query);
		if($numrows!=0){
			
			die("Létezik profil ezzel a neptunkóddal!");
			
		}
		
		$query = mysqli_query($kapcsolodas,"SELECT * FROM diak WHERE email='$email'");
		$numrows = mysqli_num_rows($query);
		if($numrows!=0){
			
			die("Létezik profil ezzel az email címmel!");
		}
		else{
			
			$titkositottjelszo= md5($jelszo); // titkosítás jelszóra
			$sql = mysqli_query($kapcsolodas,"INSERT INTO diak (nev, email, neptunkod, kar, jelszo) VALUES ('$nev', '$email', '$neptun', '$kar', '$titkositottjelszo')");
			echo "Regisztrálás sikeres volt <a href='diakbelepes.php'>itt</a> tudsz belépni!";
		}
	}else{
		
		die("Nem egyezik a jelszó kérlek probáld újra!");
	}
}else{
	
	die("Hiányos! Kérlek Tölts ki minden rublikát!");
	
}

?>