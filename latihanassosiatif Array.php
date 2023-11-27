<?php 
$penemu = array(
    1=> array(
        "Foto" => "<img src = 'Ki dewantara.jpeg' width ='100' height = '80'>",  
        "Nama_Penemu" => "Ki Hajar Dewantara",
        "Temuan" => "Taman Siswa dan tokoh pendidikan terkenal di Indonesia",
        "Tahun" => "1889 1959",
        "Asal" => "Yogyakarta",
    ),
    2 => array(
        "Foto" => "<img src = 'Ir.Soekarno.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Ir. Soekarno",
        "Temuan" => " yang mendesain Masjid Istiqlal",
        "Tahun" => "1886 1958",
        "Asal" => "Surabaya, Jawa Timur",
    ),
    3 => array(
        "Foto" => "<img src = 'Dr.cipto mangkusumo.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Dr. Cipto Mangunkusumo",
        "Temuan" => "Rumah Sakit Cipto Mangunkusumo (RSCM)",
        "Tahun" => "1886 1943",
        "Asal" => "Pecangakan, Jepara, Keresidenan Semarang",
    ),
    4 => array(
        "Foto" => "<img src = 'BJ.Habibie.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "B.J. Habibie",
        "Temuan" => "terbang N-250 GATOTKACA",
        "Tahun" => "1936-2019",
        "Asal" => "etnis Gorontalo, Sulawesi",
    ),
    5 => array(
        "Foto" => "<img src = 'Abdul Muis.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Abdul Muis",
        "Temuan" => "pengeringan jagung otomatis",
        "Tahun" => "1994 1995",
        "Asal" => "jawa timur",
    ),
    6 => array(
        "Foto" => "<img src = 'Dr.Pratiwi suarmono.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Dr. Pratiwi Sudarmono",
        "Temuan" => "ilmuwan biomedis yang berkontribusi dalam penelitian genetika, khususnya dalam mengkaji virus HIV di Indonesia",
        "Tahun" => "1955",
        "Asal" => "Bandung",
    ),
    7 => array(
        "Foto" => "<img src = 'Rudi Akili.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Rudy Akili",
        "Temuan" => "Magic Ink",
        "Tahun" => "1967",
        "Asal" => "surabaya",
    ),
    8 => array(
        "Foto" => "<img src = 'Ahmad Yani.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Ahmad Yani",
        "Temuan" => "senjata dan amunis",
        "Tahun" => " 1922 1965 ",
        "Asal" => "Jenar, Purworejo",
    ),
    9 => array(
        "Foto" => "<img src = 'Suranata Kartaadipoetra.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Suranata Kartaadipoetra",
        "Temuan" => "Sandang",
        "Tahun" => " 1912 1985 ",
        "Asal" => "Argentina",
    ),
    10 => array(
        "Foto" => "<img src = 'Benny Subianto.jpeg' width ='100' height = '80'>",
        "Nama_Penemu" => "Benny Subianto",
        "Temuan" => "Molto",
        "Tahun" => " 1947 ",
        "Asal" => "Jawa",
    ),
    // Lanjutkan sampai 10 Tabel
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 100px;
            height: 80px;
        }
    </style>
</head>
<body>
    <!--Pemilihan Tabel Penemu Penemu Terkenal Di Indonesia-->
<b>Nama : Nurmawaddah</b>
</br>
<b>NIM : 701220024</b>
</br>
<b> NRP %5 = 024% * 5 = 1,2 => Penemu Penemu Terkenal Di Indonesia</b>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
echo "<center><b>PENEMU PENEMU TERKENAL DI INDONESIA</b></center>";
echo "</br>";
echo "<table border='1'>";
echo "<tr><th>No</th><th>Foto</th><th>Nama Penemu</th><th>Temuan<th>Tahun</th><th>Asal</th></tr>";
$nomor = 1;

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($penemu as $data) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $data['Foto'] . "</td>";
    echo "<td>" . $data['Nama_Penemu'] . "</td>";
    echo "<td>" . $data['Temuan'] . "</td>";
    echo "<td>" . $data['Tahun'] . "</td>";
    echo "<td>" . $data['Asal'] . "</td>";
    echo "</tr>";
    $nomor++;
}

echo "</table>";


    ?>

</body>
</html>