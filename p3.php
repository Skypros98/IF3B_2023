
    <?php
    // Pertemuan ke - 3
    // Materi function dan if condition
    $npm = 2226250001;
    $nama = "ahmad";

    // Built-in function
    $tahun_masuk = substr($npm, 0, 2);
    echo $tahun_masuk;
    $tahun_lulus = substr($npm, 2, 2);
    echo "<br>" . $tahun_lulus;
    $prodi = substr($npm, 4, 2);
    echo "<br>" . $prodi;
    $nomorurut = substr($npm, 6, 4);
    echo "<br>" . $nomorurut;
    echo "<hr>";
    echo strtoupper($nama);
    echo "<br>" . ucfirst($nama);

    // IF condition
    // Kode Prodi : 25, Maka Informatika
    // Kode Prodi : 24, Maka Sistem Informasi
    echo "<br>";
    if ($prodi == 25) {
        echo "Informatika";
    } else if ($prodi == 24) {
        echo "Sistem Informasi";
    }

    ?>
