<?php
    $host = '103.186.30.46';
    $db = 'ppexbjum_smk30';
    $user = 'ppexbjum_raihanaditya30';
    $pass = 'raihanaditya12345';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$nisn = $_GET['nisn'];
$sql = "SELECT * FROM siswa WHERE nisn = '$nisn'";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>proses absensi siswa</title>
    </head>

    <body>
        <h2>absensi untuk <?php echo $student['nama_siswa'];?></h2>
        <form method="POST" action="submit_absensi.php">
            <input type="hidden" name="nisn" value="<?php echo $student['nisn'];?>" >

            <label><input type="radio" name="status" value="1">sakit</label><br>
            <label><input type="radio" name="status" value="2">izin</label><br>
            <label><input type="radio" name="status" value="3">alpa</label><br>
            <label><input type="date" name="tgl"></label><br>
            <input type="submit" value="kirim">
        </form>
    </body>
</html>

<?php $conn->close();?>