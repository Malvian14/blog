<?php
if($_POST['submit']){
	$conn = mysqli_connect('localhost', 'root', '', 'universitas');
	foreach ($_POST['matkul'] AS $kd_matkul) {
		$sql = 'INSERT INTO mahasiswa_matkul (nim, kd_matkul) VALUES ("'.$_POST['nim'].'", "'.$kd_matkul.'")';
		$insert = mysqli_query($conn, $sql);
	}
}