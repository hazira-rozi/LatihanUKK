<?php 
session_start();
$nisn = $_SESSION['nisn'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$kegiatan =$_POST['kegiatan'];
$hasil =$_POST['hasil'];

$format = "\n$nisn|$nama_lengkap|$tanggal|$jam|$kegiatan|$hasil";

//buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file catatan
fclose($file); ?>

<script type="text/javascript">
alert("Data catatan berhasil ditambahkan");
window.location.assign('user.php');
</script>