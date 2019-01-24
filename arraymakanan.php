<?php 
$makanan = array("Nasi Padang", "Nasi Uduk", "Nasi Goreng", "Nasi Uduk"); 
$makanan2 = array_unique($makanan); 
print_r($makanan2); 

echo "<br/>";
$alamat['ivan'] = "Nasi Uduk"; 
$alamat['ok'] = "Nasi Padang"; 
$alamat['vian'] = "Nasi Goreng"; 
echo "<br/>";
echo $alamat['ivan'];
echo "<br/>";
echo $alamat['ok']; 
echo "<br/>";
echo $alamat['vian'];  
//hasilnya Nasi Uduk 
 
echo "<br/>";
echo "<br/>";
$alamat['ivan'] = "Nasi Uduk"; 
$alamat['ok'] = "Nasi Padang"; 
$alamat['vian'] = "Nasi Goreng"; 
echo $alamat['ivan']; 
//hasilnya Nasi Uduk 


$eat = [
    "Nasi Padang",
    "Nasi Uduk",
    "Nasi Goreng",

];
echo "<br>";
echo "<h5>Perulangan foreach</h5>";
echo "<h5>Nama makanan:</h5>";
echo "<ul>";
foreach($eat as $eat){
    echo "<li>$eat</li>";
}
echo "</ul>";



for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 1; $j++){
        echo " Nasi Uduk ($i, $j)<br>";
    }
}

function sortir($key, $data) {
    $result = array();

    foreach($data as $val) {
        if(array_key_exists($key, $val)){
            $result[$val[$key]][] = $val;
        }else{
            $result[""][] = $val;
        }
    }

    return $result;
}

$data = array(
    array(
        "id" => 1,
        "name" => "Superman",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 2,
        "name" => "Manusia",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 3,
        "name" => "Diana Prince",
        "city" => "New Mexico",
        "gender" => "Female"
    ),
    array(
        "id" => 4,
        "name" => "Speedy",
        "city" => "New Mexico",
        "gender" => "Male"
    )
);

// Group data by the "" key 
$SortirData = sortir("gender", $data);

// Dump result
echo "<pre>" . var_export($SortirData, true) . "</pre>"



?>