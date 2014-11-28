<?php
include "../connect.php";
$id=$_POST['id'];
$nama_pengajar = $_POST['nama_pengajar'];
$nama_siswa = $_POST['nama_siswa'];
$no_rekening = $_POST['no_rekening'];
$tanggal_kirim = $_POST['tanggal_kirim'];
$jumlah = $_POST['jumlah'];

if(empty($id) or empty($nama_pengajar) or empty($nama_siswa) or empty($no_rekening) or empty($tanggal_kirim) or empty($jumlah))
	{
	echo "Form ada yang kosong, mohon isi kembali.";
	}
	else
	{
		$tambah = mysql_query("INSERT INTO `input_pengeluaran_pengajar`(`id`, `nama_pengajar`, `nama_siswa`, `no_rekening`, `tanggal_kirim`, `jumlah`) VALUES ('$id','$nama_pengajar','$nama_siswa','$no_rekening','$tanggal_kirim','$jumlah')");
		if($tambah==TRUE)
		{
			header('Location: input-pengeluaran-pengajar.php') ;
		}
		else
		{
			echo "$id ";
			echo "$nama_pengajar ";
			echo "$nama_siswa ";
			echo "$no_rekening ";
			echo "$tanggal_kirim ";
			echo "$jumlah ";
		}
	}
?>