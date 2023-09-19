<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemberi harapan palsu</title>
    <!-- Link CDN via Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">    

<?php
    // Pertemuan 1
    echo "Selamat Sore!<br>";
    // Ini komentar di php
    /*
       ini komentar banyak baris
    */

    // Variabel
    $nama = "Muhammad Agus"; // String
    $npm = 2226250098; // int
    $status = true; // boolean

    // tampilkan isi variabel
    echo "<br> Nama saya : $nama,<br> dengan NPM : $npm,<br> Status : $status";
    echo "<hr>";

    // Pertemuan 2
    // array index : diawali dengan index ke-0
    $hobi = array("Baca ", "Game");
    $hobi2 = ["Badminton ", "Futsal"];

    echo "<br>",$hobi[0]; // Output Baca
    echo "<br>",$hobi[1]; // Output Game

    echo "<br>",$hobi2[0]; // Output Badminton
    echo "<br>",$hobi2[1]; // Output Futsal
    echo "<hr>";

    // array assosiatif
    $mahasiswa = [
        "npm" => 2226250096,
        "nama" => "Ahmad Fatoni",
        "email" => "ahmad@test.com",
        "status" => true
    ];
    echo "<br>",$mahasiswa ["npm"]; // Output 2226250001
    echo "<br>",$mahasiswa ["nama"]; // Output Ahmad
    echo "<br>",$mahasiswa ["email"]; // Output ahmad@test.com
    echo "<hr>";
    
    // array multidimensi
    $mahasiswaIF3B = [
        [
            "npm" => 2226250001,
            "nama" => "Ahmad",
        ],
        [
            "npm" => 2226250002,
            "nama" => "Rizky",
        ],
        [
            "npm" => 2226250003,
            "nama" => "Putra",
        ]
    ];
    echo "<br>",$mahasiswaIF3B[0]["npm"];
    echo "<br>",$mahasiswaIF3B[0]["nama"];
    echo "<br>";
    echo "<br>",$mahasiswaIF3B[1]["npm"];
    echo "<br>",$mahasiswaIF3B[1]["nama"];
    echo "<br>";
    echo "<br>",$mahasiswaIF3B[2]["npm"];
    echo "<br>",$mahasiswaIF3B[2]["nama"];
    echo "<hr>";

    echo "<table class='table table-striped table-hover'>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>";
    // foreach
    foreach(@$mahasiswaIF3B as $row){
        echo "<tr>
                <td>".$row["npm"]."</td>
                <td>".$row["nama"]."</td>
             </tr>";
    }
    echo "</tbody></table><hr>";

    // array multidimensi
    $jadwal = [
        [
            "no" => 1,
            "hari" => "Senin",
            "jam" => "09:40:00 - 11:20:00",
            "mata kuliah" => "Teori Bahasa dan Otomata",
            "sks" => 2,
            "ruang" => "A 303",
            "kelas" => "IF3B",
            "dosen" => "Dien Novita, S.Si., M.T.I.",
        ],
        [
            "no" => 2,
            "hari" => "Senin",
            "jam" => "13:30:00 - 15:10:00",
            "mata kuliah" => "Algoritma dan Struktur Data II",
            "sks" => 3,
            "ruang" => "Lab B604",
            "kelas" => "IF3B",
            "dosen" => "Tinaliah, M.Kom.",
        ],
        [
            "no" => 3,
            "hari" => "Selasa",
            "jam" => "07:50:00 - 09:30:00",
            "mata kuliah" => "Statistika dan Probabilitas",
            "sks" => 4,
            "ruang" => "A 304",
            "kelas" => "IF3B",
            "dosen" => "Indrawani S,Ir., MS",
        ],
        
    ];

    echo "<table class='table table-striped table-hover'>
    <thead>
        <tr>
            <th>NO</th>
            <th>HARI</th>
            <th>JAM</th>
            <th>MATA KULIAH</th>
            <th>SKS</th>
            <th>RUANG</th>
            <th>KELAS</th>
            <th>DOSEN</th>
        </tr>
    </thead>
    <tbody>";
    // foreach
    foreach(@$jadwal as $row){
        echo "<tr>
                <td>".$row["no"]."</td>
                <td>".$row["hari"]."</td>
                <td>".$row["jam"]."</td>
                <td>".$row["mata kuliah"]."</td>
                <td>".$row["sks"]."</td>
                <td>".$row["ruang"]."</td>
                <td>".$row["kelas"]."</td>
                <td>".$row["dosen"]."</td>
             </tr>";
    }
    echo "</tbody></table>";
?>
    </div>
  </body>
</html>