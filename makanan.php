<!DOCTYPE html>
<html>
<head>
	<title>daftar makanan</title>
</head>
<body>
<?php
$connection = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("makanan",$connection) or die (mysql_error());
$sql = mysql_query('SELECT * FROM daftar_makanan ORDER BY nama_makanan ASC;');
?>

<DIV id="container">
	<form action=""method ="">
		<select name="daftar_makanan">
			<option>-- Pilih Makanan --</option>>
			<?php if (mysql_num_rows($sql) > 0){?>
				<?php while ($row = mysql_fetch_array($sql)) { ?>
					<option><?php echo $row['nama_makanan']?></option>	
			<?php	}?>
			<?php} ?>

		</select>
	<input type="submit" value="ok" name="ok_submit"/>
</form>
</DIV>
</body>
</html>
