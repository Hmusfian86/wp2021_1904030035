<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
    <h1>Membuat Array</h1>
    <?php
    $values = array(1,2,3,4,5.60);
    var_dump($values);
    echo"<br>";
    echo($values[4]);
    
    echo"<br>";

    $prodi = ["T.Sipil","T.Industri","T.Informatika","T.Kimia"];
    var_dump($prodi);
    echo"<br>";
    echo($prodi[3]);

    echo"<br>";

    //mengganti isi value
    $prodi[0] = "T.Nuklir";
    var_dump($prodi);

    echo"<br>";

    //menambahkan value
    $prodi[] = "T.Komputer";
    var_dump($prodi);
    echo"<br>";

    //menghapus salah satu value
    unset($prodi[0]);
    var_dump($prodi);
    echo"<br>";

    //menghitung total array
    echo"<br>";
    var_dump(count($prodi));
 
?>
<hr>
    <h1>Map dengan Array</h1>
    <?php
    $Sukisno = array(
                "id" => "Maskizz",
                "nama" => "Sukisno NHP",
                "umur" => 38
                );
    var_dump($Sukisno);
    echo"<br>";
    $HADI = [  "id" => "Hadi ",
                "nama" => "Hadi Musfianto",
                "umur" => 21,
                "alamat" => [
					"kota" => "Tangerang", "Prov" => "Banten"
			    ]
             ];

    var_dump($HADI);
    echo"<br>";
    echo("Nama id : ". $HADI["id"]);
    echo"<br>";
    echo("Nama lengkap : ".$HADI["nama"]);
    echo"<br>";
    echo("Umur : ".$HADI["umur"]);  
    ?>

    <hr>
    <h1>Operator Aritmatika</h1>

    <?php
    $tambah = 10 + 10;
    $kurang = 100-10;
    $kali   = 5*5;
    $bagi   = 50/10;
    $modular = 100 % 3;
    $pangkat = 4**3;
    
    echo "tambah : " . $tambah. "<br>";
    echo "kurang : " . $kurang. "<br>";
    echo "kali : " . $kali. "<br>";
    echo "bagi : " . $bagi. "<br>";
    echo "modular : " . $modular. "<br>";
    echo "pangkat : " . $pangkat. "<br>";
    ?>

    <hr>
    <h1>Increment</h1>
    <?php
    $a = 10;
    $a++;
    // $a = $a + 1;
    $a++;
    $a--;

    echo($a);

    ?>
</body>
</html>