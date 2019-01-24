<?php
// array
$makanan = ['Nasi Padang','Nasi Uduk','Nasi Goreng','Nasi Ayam']
var_dump($makanan);
echo "<br><br>nomor1";
echo "<br><br> $makanan [0],<br>$makanan[1],<br>$makanan[2]";
foreach ($makanan as $key => $value) {
# code...
echo $value.'<br>';
 }
for ($value = 0; $value < count($makanan); $value++){
	echo $makanan[$value].'<br>';

}
echo "<br><br>Nomor 2";
echo "<br>$makanan[1]";
?>