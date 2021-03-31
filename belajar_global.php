<?php
    // $_POST['nama'] = "Afrida Wardani";
    if (isset($_POST['submit_btn'])){
        if (strlen($_POST['diameter'])>0){
            echo "login !";
        } else {
            echo "Isi diameter ";
        }
    }
    if (isset($_POST['button_submit'])){
        $diameter = $_POST['diameter'];
        $tinggi = $_POST['tinggi'];

        $r = $diameter  / 2;
        $luas = 3.14 * $diameter * $tinggi;
        $volume = 3.14 * $r * $r *tinggi;
        echo "Diameter $diameter"<br/>;
        echo "Tinggi $tinggi" <br/>;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button>Hitung</button>

       
    </form>
    <hr>

<ul>
    <li>Luas Sisi : 0</li>
    <li>Volume : 0</li>
</ul>
</body>
</html>