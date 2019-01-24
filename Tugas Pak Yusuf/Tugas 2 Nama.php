<html>
<head>
		<title>nilai</title>
</head>
<body>
	<form class ="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label>
		Nama <input type="text" name="nama">
	</label>
	<br>
	<label>
		Tugas	<input type="text" name="Tugas"><br>
		UTS <input type="text" name="UTS"><br>
		UAS	<input type="text" name="UAS"><br>
	</label>
	<input type="submit" name="submit" value="submit">

	<?php
	 	$nama = $_REQUEST['nama'];
		$Tugas = $_REQUEST['Tugas'];
		$UTS = $_REQUEST['UTS'];
		$UAS = $_REQUEST ['UAS'];
		$submit = $_REQUEST ['submit'];

		if (isset($submit)){
			$hasil = (0.15*$Tugas)+(0.35*$UTS)+(0.5*$UAS);
			echo "$hasil";
			if ($hasil>=90){
				echo "Grade $nama A";
			}
			if ($hasil>=80){
				echo "Grade $nama B";
			}
			if ($hasil>=75){
				echo "Grade $nama C";
			}
			if ($hasil>=70){
				echo "Grade $nama D";
			}
		}
	?>
</body>
</html>