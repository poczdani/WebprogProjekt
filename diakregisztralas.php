<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="design.css">
	</head>
	<body>


	<script>
        function belep_btn() {
            window.location.href = "diakbelepes.php";


        }

     

    </script>
		<h1 style="color:whitesmoke">Diák Regisztráció</h1>
		<form method="post" action="diakregiszter.php">							
				<label style="color:whitesmoke">Név:</label>
				<input type="text" name="nev"></input><br>
				<label style="color:whitesmoke">Email:</label>
				<input type="text" name="email"></input><br>
				<label style="color:whitesmoke">Neptunkód:</label>
				<input type="text" name="neptun"></input><br>
				<label style="color:whitesmoke">Kar:</label>
				<select name="kar">
					<option value="gtk">GTK</option>
					<option value="gk">GK</option>
					<option value="mk">MK</option>
					<option value="mftk">MFTK</option>
					<option value="mik">MIK</option>
				</select><br>
				<label style="color:whitesmoke">Jelszó:</label>
				<input type="password" name="jelszo"></input><br>
				<label style="color:whitesmoke">Jelszó újra:</label>
				<input type="password" name="jelszoconfirm"></input><br>
				<input type="submit"  class="btn btn-secondary" name="register" value="Regisztrálás"/>		
				<button name="belepes" class="btn btn-secondary" onclick="belep_btn()">Belépés</button>
		</form>
	</body>
</html>