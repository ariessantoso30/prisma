<?php
include "../connect.php";
$id = $_POST['id'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$transaksi = $_POST['transaksi'];
$kuantitas = $_POST['kuantitas'];
$harga = $_POST['harga'];

if(empty($id) or empty($tanggal_transaksi) or empty($transaksi) or empty($kuantitas) or empty($harga))
	{
	echo "Form ada yang kosong, mohon isi kembali.";
	echo "$id ";
	echo "$tanggal_transaksi ";
	echo "$transaksi ";
	echo "$kuantitas ";
	echo "$harga ";
	}
	else
	{
		$tambah = mysql_query("INSERT INTO `olah_pengeluaran_lainnya`(`id`, `tanggal_transaksi`, `transaksi`, `kuantitas`, `harga`) VALUES ('$id','$tanggal_transaksi','$transaksi','$kuantitas','$harga')");
		if($tambah==TRUE)
		{
			header('Location: input-pengeluaran-lainnya.php') ;
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