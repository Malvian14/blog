<html>
<head>
		<title>form makanan</title>
</head>
<body>
	<form class ="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Uang Anda	<input type="text" name="jmluang"><br>
		Harga Makan Anda <input type="text" name="hrgmakanan"><br>
		<input type="submit" name="submit" value="prosses">
	</form> 
	<?php
		$uang = $_REQUEST['jmluang'];
		$makanan = $_REQUEST['hrgmakanan'];
		$submit = $_REQUEST ['submit'];

		if (isset($submit))
		{
			if ($uang<$makanan)
			{
				echo "Uang Anda Kurang";
			}
			else
			{
				//$uang >=makanan) {
				$hasil = $uang - $makanan;
				echo "Kembalian anda $hasil"; 
				
			}
		}
	?>
</body>
</html>
