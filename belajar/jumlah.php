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
 $sql = $conn->query("SELECT 
	siswa.nisn AS nisn,
    siswa.nama_siswa AS nama,
   SUM(CASE WHEN absensi.id_absen = 1 THEN 1 ELSE 0 END) AS sakit,
   SUM(CASE WHEN absensi.id_absen = 2 THEN 1 ELSE 0 END) AS izin,
   SUM(CASE WHEN absensi.id_absen = 3 THEN 1 ELSE 0 END) AS alpha,
   SUM(CASE WHEN absensi.id_absen IN (1, 2, 3) THEN 1 ELSE 0 END) AS jumlah
FROM
     absensi
JOIN
    siswa ON absensi.nisn = siswa.nisn
WHERE
	siswa.nisn
    AND absensi.tanggal_absensi BETWEEN '2024-01-01' AND '2025-05-20'
    GROUP BY
     siswa.nisn,siswa.nama_siswa;");
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>rekap absen </h1>
        <table border="1">
            <thead>
                <th>NISN</th>
                <th>NAMA</th>
                <th>SAKIT</th>
                <th>IZIN</th>
                <th>ALPHA</th>
                <th>JUMLAH</th>
            </thead>
            <tbody>
            <?php while ($siswa = $sql->fetch_assoc()) { ?>
                <tr style="text-align: center;">
                <td><?php echo $siswa['nisn']; ?></td>
                <td><?php echo $siswa['nama']; ?></td>
                <td><?php echo $siswa['sakit']; ?></td>
                <td><?php echo $siswa['izin']; ?></td>
                <td><?php echo $siswa['alpha']; ?></td>
                <td><?php echo $siswa['jumlah']; ?></td>
            </tr>
                    <?php  } ?>
            </tbody>
        </table>

        <br><a style="background-color: brown;" href="siswa.php">back</a>
    </body>
</html>