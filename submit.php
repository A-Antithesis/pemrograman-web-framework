<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "contact_us"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];
$gender = $_POST['gender'];
$saran = $_POST['saran'];


$sql = "INSERT INTO contact (nama, nim, email, kelas, gender, saran) VALUES ('$nama', '$nim', '$email', '$kelas', '$gender', '$saran')";

if ($conn->query($sql) === TRUE) {
    echo "DATA BERHASIL DISIMPAN.<br>";
    echo "<img src='https://shorturl.at/J5z3r' alt='Gambar' style='max-width: 100%; height: auto;'>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>