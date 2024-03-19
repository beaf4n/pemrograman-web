<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Form</title>
</head>
<body>
<h2>Form Registrasi</h2>
    <form action="proseslatihanform.php" method="post">
        <fieldset>
            <legend>Biodata</legend>
            <p>Nama <input type="text" name="name" id="name"></p>
            <p>Tanggal Lahir <input type="date" name="tgllhr" id="tgllhr"></p>
            <p>Alamat <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></p>
            <p>Jenis Kelamin <input type="radio" id="laki2" name="sex" value="laki2">Laki-Laki <input type="radio" id="perm" name="sex" value="perm">Perempuan</p>
        </fieldset>

        <fieldset>
            <legend>Akun</legend>
            <p>Username <input type="text" name="username" id="username"></p>
            <p>Password Lahir <input type="password" name="password" id="password"></p>
            <p>Alamat Email <input type="email" name="aemail" id="aemail"></p>
        </fieldset>

        <fieldset>
            <legend>Mata Kuliah Yang Diambil</legend>
            <input type="checkbox" id="kalkulus" name="matkul1" value="kalkulus">
            <label for="kalkulus"> Kalkulus</label><br>
            <input type="checkbox" id="daspro" name="matkul2" value="daspro">
            <label for="daspro"> Daspro</label><br>
            <input type="checkbox" id="aljabar" name="matkul3" value="aljabar">
            <label for="aljabar"> Aljabar</label><br>
            <input type="checkbox" id="jarkom" name="matkul4" value="jarkom">
            <label for="jarkom"> Jarkom</label><br>
            <input type="checkbox" id="iot" name="matkul5" value="iot">
            <label for="iot"> IOT</label><br>
            <input type="checkbox" id="web" name="matkul6" value="web">
            <label for="web"> Web</label><br>
        </fieldset>
        <br>
        <input type="submit" value="Proses">
    </form>
</body>
</html>