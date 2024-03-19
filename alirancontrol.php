<?php
    echo "Materi 3 : Aliran Control";
    echo "<br>";
    echo "<br>";
    
    // Kondisional / Percabangan (if, else if, switch)
    // Iterasi / Perulangan (for, while, do while, foreach)

    // If
    echo "If";
    echo "<br>";
    // if (kondisi) {
    //     statement;
    // }

    // Nested if
    // if (kondisi1) {
    //     statement;
    //     if (kondisi2) {
    //         statement2;
    //     }
    // }

    // if (kondisi):
    //     statement
    // endif

    $user = "admin";
    if ($user == "admin"){
        echo "Selamat datang admin";
    }

    if ($user == "user"){
        echo "Selamat datang tamu";
    }

    echo "<br>";
    echo "<br>";

    // Else If
    echo "Else If";
    echo "<br>";

    $user2 = "bukanuser";
    if ($user2 == "user"){
        echo "Selamat datang user";
    }
    else if ($user2 == "admin"){
        echo "Selamat datang admin";
    }
    else{
        echo "Anda tidak memiliki akses";
    }

    echo "<br>";
    echo "<br>";

    // Switch
    echo "Switch";
    echo "<br>";
    // switch ($variabel) {
    //     case nilai:
        // statement
    // }

    $hari = 1;
    switch ($hari){
    case 1:
        echo "Hari senin";
        break;
    case 2:
        echo "Hari selasa";
        break;
    case 3:
        echo "Hari rabu";
        break;
    case 4:
        echo "Hari kamis";
        break;
    case 5:
        echo "Hari jumat";
        break;
    case 6:
        echo "Hari sabtu";
        break;
    case 7:
        echo "Hari minggu";
    }

    // Ops Tenary
    if (7 < 5) {
        $has = "Benar";
    }
    else {
        $has = "Salah";
    }

    echo "<br>";
    echo "<br>";

    echo $has;
    echo "<br>";
    $hass = ( 7 > 5) ? "Benar" : "Salah";
    echo $hass;

    echo "<br>";
    echo "<br>";

    // Struktur Perulangan
    // For -- > Kondisi awal, perintah yang perlu diulang, kondisi berhenti
    // for (mulai; kondisi berhenti; increment/kenaikan){
    //     perintah/statement;
    // }

    for ($i = 1; $i <= 10; $i++){
        echo $i;
    }

    echo "<br>";
    echo "<br>";

    for ($i = 1; $i <= 10; $i++){
        if ($i % 2 == 0){
            echo "$i adalah bilangan genap"; echo "<br>";
        }
        else{
            echo "$i adalah bilangan ganjil"; echo "<br>";
        }
    }

    echo "<br>";
    echo "<br>";

    // While
    // mulai;
    // while (kondisi){
    //     perintah/statement;
    //     kenaikan;
    // }

    $i = 1;
    while($i<=10){
        echo $i;
        $i++;
    }

    echo "<br>";
    echo "<br>";

    $i = 1;
    $j = 0;
    while($j<=10000){
        $j = ($i ** 3) + ($i * 2);
        echo $i; echo " "; echo $j;
        echo "<br>";
        $i++;
    }

    echo "<br>";
    echo "<br>";

    // Do While
    // mulai;
    // do {
    //     perintah/statement;
    //     kenaikan;
    // } while (kondisi)

    // For Each
    $arr = ["A", "B", "C", "D", "E"];
    for ($i = 0; $i<= 4; $i++){ // Loop Biasa (For)
        echo "$arr[$i] <br>";
    }

    echo "<br>";
    echo "<br>";

    foreach ($arr as $hur){ // Loop For Each
        echo "$hur <br>";
    }
?>