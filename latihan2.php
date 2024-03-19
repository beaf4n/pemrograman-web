<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Pilih Tanggal
    <select name="tanggal" id="tanggal">
        <?php
        for ($i = 1; $i <= 31; $i++){
            echo "<option value=$i>$i</option>";
        }
        ?>
    </select>
    <br>
    Pilih Bulan
    <select name="bulan" id="bulan">
        <?php
        for ($i = 1; $i <= 12; $i++){
            echo "<option value=$i>$i</option>";
        }
        ?>
    </select>
    <br>
    Pilih Tahun
    <select name="tahun" id="tahun">
        <?php
        for ($i = 1980; $i <= 2010; $i++){
            echo "<option value=$i>$i</option>";
        }
        ?>
    </select>
</body>
</html>