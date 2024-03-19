<?php
    echo "Materi 2 : OPERATOR";
    echo "<br>";
    echo "<br>";

    // Jenis Operator
    // Unary (-, +), Binary, Ternary (?, :)
    $a = -5;
    $b = 14 + 15;

    // Ops Aritmatika (+, -, *, /, %, **)
    // Ops Incerement dan decrement ($a++. $a--(post incerement))
    // Ops Perbandingan (Boolean) (==, ===, !=, <>, <, >, <=, >=)
    echo "Ops Aritmatika";
    echo "<br>";
    $c = 3;
    $d = "3";
    var_dump($c == $d);
    echo "<br>";
    var_dump($c === $d);
    echo "<br>";
    echo "<br>";

    echo "Ops Logika";
    echo "<br>";
    // Ops Logika (and &&, or ||, !)
    // Ops String (.)
    $kata1 = "Rekayasa ";
    $kata2 = "Sistem ";
    $kata3 = "Komputer ";
    $kata = $kata1 . $kata2 . $kata3;
    echo $kata;
    echo "<br>";
    $hasil = false and true;
    $hasill = true and false;
    var_dump($hasil);
    echo " | ";
    var_dump($hasill)
?>