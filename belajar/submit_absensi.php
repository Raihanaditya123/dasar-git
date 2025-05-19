<?php
    $host = '103.186.30.46';
    $db = 'ppexbjum_smk30';
    $user = 'ppexbjum_raihanaditya30';
    $pass = 'raihanaditya12345';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("connection failed:".$conn->connect_error);
}

$nisn = $_POST['nisn'];
$status = $_POST['status'];
$date = $_POST['tgl'];

$sql = "INSERT INTO absensi (nisn, id_absen, tanggal_absensi)VALUE('$nisn',$status,'$date')";

if ($conn->query($sql) === TRUE) {
    echo"absensi berhasil disimpan";
}else {
    echo"error:".$sql."<br>".$conn->error;
}
    
$conn->close();

?>

<html>
    <a href="siswa.php">home</a>
</html>