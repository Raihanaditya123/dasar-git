<?php 
    $host = '103.186.30.46';
    $db = 'ppexbjum_smk30';
    $user = 'ppexbjum_raihanaditya30';
    $pass = 'raihanaditya12345';
    $conn = new mysqli($host,$user,$pass,$db);

    if ($conn->connect_error){   
             die("Connection failed: ".  $conn->connect_error);
    }
    
 
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $sql = "SELECT * FROM siswa WHERE nama_siswa LIKE '%$search%'";
    $result = $conn->query($sql);
    $query = $conn->query("SELECT a.tanggal_absensi,
    s.nama_siswa,
    t.nama_absen AS nama_absen
    FROM
    absensi a
    JOIN
    siswa s
    ON
    a.nisn = s.nisn
    JOIN
    tipe_absen t 
    ON
    a.id_absen = t.id_absen
    WHERE
    a.tanggal_absensi = CURRENT_DATE();");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Siswa</h2>
    <form method="GET" action="siswa.php">
        <input type="text" name="search" placeholder="cari nama siswa">
        <input type="submit" value="cari">
    <br> <br> <a href="jumlah.php">jumlah absen</a>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['nisn']}</td>
                    <td>{$row['nama_siswa']}</td>
                    <td>{$row['jurusan']}</td>
                    <td><a class='button' href='proses_siswa.php?nisn={$row['nisn']}'>Proses</a></td>
                    </tr>";
                }
                } else {
                    echo "<tr><td colspan='4'>No records found</td><tr>";
                }
            ?>
        </tbody>
    </table>
    <table border="1">
        <thead>
            <tr>
                <th>tanggal</th>
                <th>nama siswa</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['tanggal_absensi']}</td>
                    <td>{$row['nama_siswa']}</td>
                    <td>{$row['nama_absen']}</td>
                    </tr>";
                }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
            ?>
        </tbody>       
    <script>
        function prosessSiswa(nisn) {
           window.location.href = 'proses_siswa.php?nisn=' + nisn;
        }
    </script>
</body>
</html>
<?php $conn->close(); ?>