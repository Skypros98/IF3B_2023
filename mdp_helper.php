
    <?php
    // buat function sendiri
    // Function untuk mendapatkan nama prodi berdasarkan kode prodi
    function get_prodi($kode_prodi)
    {
        // Bisa pakai if else
        // Bisa pakai array
        $array = [
            25 => "Informatika",
            24 => "Sistem Informasi",
            27 => "Teknik Elektro",
            11 => "Manajemen Informatika",
            20 => "Manajemen",
            21 => "Akuntansi"
        ];
        return $array[$kode_prodi];
    }

    ?>