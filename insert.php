<?php include "koneksi.php" ;

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$hp = $_POST['hp'];

$data = mysqli_query($koneksi, "INSERT INTO formulir (nama, nik, hp) VALUES ('$nama', '$nik', '$hp')");

if ($data) {
	header("location:hasil.html?msg=success");
}

else{
	echo "error";
}

?>