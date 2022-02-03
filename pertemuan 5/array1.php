<h4>Membuat dan menampilkan array</h4>
    <?php 
    //membuat array mahasiswa
    $nim = ["hadi musfianto","anton","suhendrik","jimly","panji","sopyan"];
    ?>

    <!-- menampilkan isi aray pengulangan for -->
    <?php
    for($i=0; $i < count($nim); $i++){
        echo $nim[$i]."<br>";
    }
    ?>

    <hr>

    <?php
    //membuat array buku
    $buku = ["desain web","OOP","Web programming","panduan web","sistem keamanan komputer"];
    ?>
    <!-- menampilkan isi array dengan foreach -->
    <?php 
    foreach($buku as $buku){
        echo $buku."<br>";
    }
    ?>
    <hr>

<h4>Menambahkan Array</h4>
    <?php
    //membuat array
    $hobi = ["olahraga","main game","rebahan"];

    //mengganti isi pada indexs ke-2
    $hobi[2] = "Bersepeda";
    //menambahkan isi pada indexs ke-3
    $hobi[3] = "dengar musik";

    //menambahkan isi pada indexs terakhir
    $hobi[] = "edit foto";

    //cetak array dengan perulangan
    foreach($hobi as $hobiku){
        echo $hobiku."<br>";

    }
    ?>

<h4>Array Asosiatif</h4>
    <?php
    //Membuat Array
    $mhs = [
            "nim"   => "1904030035", 
            "nama"  => "Hadi Musfianto",
            "fakultas" => "Fakultas Teknik",
            "jurusan"  => "Teknik Informatika",
    ];
    //mencetak isi array assoiatif
    echo "<h5>Data Mahasiswa</h5>";
    echo "<p>nim : ".$mhs["nim"]."</br>";
    echo "<p>nama : ".$mhs["nama"]."</br>";
    echo "<p>fakultas : ".$mhs["fakultas"]."</br>";
    echo "<p>jurusan : ".$mhs["jurusan"]."</br>";
    ?>
    <hr>
<h4>Array Multidimensi</h4>
    <?php
    //membuat array 2 dimensi dengan assosiatif
    $dosens = [
        [ "nama" => "Asep Hardianto",
          "Mk"   => "Web Programming"
    ],

         [ "nama" => "Siti",
           "Mk"   => "Keamanan Sistem Komputer"
        ],

        [ "nama" => "Sukisno",
          "Mk"   => "Struktur Data"

    ]

    ];

    //menampilkan Array
    foreach($dosens as $dosen){
        echo "<h2>". $dosen["nama"]."</h2>";
        echo "<p>". $dosen["Mk"]."<p>";
        echo "<hr>";
    }
    ?>