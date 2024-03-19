<?php
    echo "Materi 4 : Function";
    echo "<br>";
    echo "<br>";
    
    // function nama_fungsi($param, $param){
    //     statement
    // }
    function halo($nama){
        echo "<p>Halooo!, $nama</p>";
    }
    halo("A");

    function luasSegitiga($alas, $tinggi){
        global $luas;
        $luas = 0.5 * $alas * $tinggi;
        return $luas; // local var luas
        // echo "$luas <br>"; // global var luas
    }
    $a = luasSegitiga(5, 5); // local var luas
    // luasSegitiga(5, 5); // global var luas
    echo "$a <br>";
    $b = $a * 2;
    echo "$b <br>";

    // Lamda

    $pagi = function() {
        echo "Selamat Pagi";
    };
    $pagi();

    // Build in function
    // Intergere & Float --> abs(), cell() membulatkan ke atas, floor() membulatkan kebawah, round() membulatkan ke terdetak, sin(), cos(), pow() pangkat, log(), sqrt(), min(), max(), rand()
    // String --> strtolower() = semua huruf jadi kecil, strtoupper() = semua huruf besar, strlen() = hitung panjang string
    // Array --> count() hitung element array, arraysum() menginteger array, sort() mengurutkan array
?>