<!DOCTYPE html>
<html>
<head>
	<title>A1-118140184-Tugas1</title>
</head>
<body>

	<form action="" method="get">
		
		<label for="input">Masukan Angka: </label>
		<input type="number" id="input" name="bilangan">
		<br><br>
		<button type="submit" name="submit">Simpan</button>

	</form>
	<br>

</body>
</html>

<?php 

	function faktorial($n){

		$f=1;
		echo "$n! = ";

		for ($i=$n;$i>0;$i--){

			if ($i==1) {
				echo "$i";
			}

			else {
				echo "$i * ";
			}
			
			$f=$f*$i;

		}

		echo " = $f";
	}

	if (isset($_GET["submit"])) {
		frial($_GET["bilangan"]);
	}

 ?>