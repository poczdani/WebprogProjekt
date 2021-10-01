<?php

$nev = $_POST['cegnev'];
$email = $_POST['email'];
$kar = $_POST['kar'];
$jelszo = $_POST['jelszo'];
$jelszomegerosit = $_POST['jelszo_megeresoit'];
$poziciokszama = $_POST['pozicio'];
$idotartam = $_POST['ido'];


if($nev&&$email&&$kar&&$jelszo&&$jelszomegerosit&&$poziciokszama&&$idotartam){
	if($jelszo==$jelszomegerosit){
		
		$kapcsolodas = mysqli_connect('localhost','root','');
		$adatbazis = mysqli_select_db($kapcsolodas,'szakmaigyak');
	

		$query = mysqli_query($kapcsolodas,"SELECT * FROM ceg_db WHERE email='$email'");
		$numrows = mysqli_num_rows($query);
		if($numrows!=0){
			
			die("Létezik profil ezzel az email címmel!");
		}
		else{                                                                                     
                                                                                                                                                   
			$titkositottjelszo= md5($jelszo); // titkosítás jelszóra
			$sql = mysqli_query($kapcsolodas,"INSERT INTO ceg_db (email, cegnev, pozicio, idotartam, kar, jelszo) VALUES ('$email', '$nev', '$poziciokszama','$idotartam',  '$kar', '$titkositottjelszo')");
			echo "Regisztrálás sikeres volt <a href='cegbelep.php'>itt</a> tudsz belépni!";
           
        }
	}else{
		
		die("Nem egyezik a jelszó kérlek probáld újra!");
	}
}else{
	
	die("Hiányos! Kérlek Tölts ki minden rublikát!");
	
}

?>





