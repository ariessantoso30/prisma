<?php
include "../connect.php";
$id=$_POST['id'];
$nama_siswa = $_POST['nama_siswa'];
$nama_pengirim = $_POST['nama_pengirim'];
$tanggal_terima = $_POST['tanggal_terima'];
$jumlah = $_POST['jumlah'];

if(empty($id) or empty($nama_siswa) or empty($nama_pengirim) or empty($tanggal_terima) or empty($jumlah))
	{
	echo "Form ada yang kosong, mohon isi kembali.";
	}
	else
	{
		$tambah = mysql_query("INSERT INTO `input_pemasukan`(`id`, `nama_siswa`, `nama_pengirim`, `tanggal_terima`, `jumlah`) VALUES ('$id','$nama_siswa','$nama_pengirim','$tanggal_terima','$jumlah')");
		if($tambah==TRUE)
		{
			header('Location: input-pemasukan.php') ;
		}
		else
		{
			echo "Gagal";
		}
	}
?>