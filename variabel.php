<?php

// Title
echo "Materi 1 : VARIABEL";
echo "<br>";
echo "<br>";

// Variabel
echo "VARIABEL";
echo "<br>";
$ipk = 2.97;
$nama = "F4N";
echo $ipk . "   " . $nama;
echo "<br>";
echo "<br>";

// Define
echo "DEFINE";
echo "<br>";
// constanta
// const pi = 3.14;
// define("ipk",3.14);

$nama = "Irfan";
define("ipk",3.25);

echo $nama;
echo "<br>";
echo ipk;
echo "<br>";
echo "$nama memiliki IPK". ipk;
echo "<br>";
echo "<br>";

// type data
echo "TYPE DATA";
echo "<br>";
// $a
// $nama
// integer
// float 
// boolean
// string
// array
// object 

$variabel1 = 50;
$variabel2 = "Mipa";
$variabel3 = 2.97;
echo $variabel1;
echo "<br>";
echo gettype($variabel1);
echo "<br>";
var_dump($variabel1);
echo "<br>";
echo $variabel2;
echo "<br>";
echo gettype($variabel2);
echo "<br>";
var_dump($variabel2);
echo "<br>";
echo $variabel3;
echo "<br>";
echo gettype($variabel3);
echo "<br>";
var_dump($variabel3);
echo "<br>";
echo "<br>";

// Array
echo "ARRAY";
echo "<br>";
$mahasiswa = array("Andi", "Budi", "Cindy");
echo $mahasiswa[1];
echo "<br>";
$mahasiswa2 = ["Andi", "Budi", "Cindy"];
echo "Mahasiswa kedua bernama $mahasiswa2[0]";
echo "<br>";
$campur = [10, "Siskom", 0.18, "PHP"];
echo $campur[1];
$campur[4] = "Resiskom";
$campur[] = 5000;  // menambah element array
$campur[] = "FMIPA";
echo "<br>";
echo "<pre>";
var_dump($campur);
"</pre>";

unset($campur[2]); // menghapus isi array
echo "<pre>";
var_dump($campur);
"</pre>";

$campur[2] = "Nilai baru";
echo "<pre>";
var_dump($campur);
"</pre>";

// Array Multidimensi
echo "ARRAY MULTIDIMENSI";
echo "<br>";

$matriks = array(
    array(1,2),
    array(3,4)
);
echo $matriks[0][1];
echo "<br>";
$matriks1 = [[5,6], [7,8], [9,10]];
echo $matriks1[1][1];
echo "<br>";
echo "<pre>";
print_r($matriks1);
"</pre>";

?>