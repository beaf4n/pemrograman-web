<?php
    // Latihan
    // 1. Buat code program untuk membedakan bilangan ganjil dan genap (A = 11 = Ganjil. B = 12 = Genap)
    // 2. Buat code program untuk menentukan apakah suatu bilangan lebih besar, lebih kecil, atau sama dengan bilangan lainnya (Jika A = 5 > B = 6, Output = 5 > 6)
    // 3. Buat code program untuk memeriksa masukan berupa masukan username & password dimana terdapat 4 kondisi
    // Kondisi 1 : Username & Pass Benar
    // Kondisi 2 : Username Benar, Pass Salah
    // Kondisi 3 : Username Salah, Password Benar
    // Kondisi 4 : Username & Password Salah

    echo "LATIHAN";
    echo "<br>";
    echo "<br>";

    // No 1
    echo "No 1";
    echo "<br>";

    $angka = 1;
    if ($angka %2 == 0){
        echo "$angka genap";
    }
    else {
        echo "$angka ganjil";
    }

    echo "<br>";
    echo "<br>";

    // No 2
    echo "No 2";
    echo "<br>";
    $angkake1 = 5;
    $angkake2 = 6;
    if ($angkake1 > $angkake2){
        echo "$angkake1 > $angkake2";
    }
    else if ($angkake1 < $angkake2){
        echo "$angkake1 < $angkake2";
    }
    else {
        "$angkake1 = $angkake2";
    }

    echo "<br>";
    echo "<br>";

    // No 3
    echo "No 3";
    echo "<br>";
    $username = "iniusername";
    $password = "inipassword";

    if ($username == "iniusername" AND $password == "inipassword"){
        echo "Anda berhasil login";
    }
    else if ($username == "iniusername" AND $password != "inipassword"){
        echo "Password salah";
    }
    else if ($username != "iniusername" AND $password == "inipassword"){
        echo "Username salah";
    }
    else {
        echo "Username & Password salah";
    }
?>