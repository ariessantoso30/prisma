<?php
include "connect.php";
$tambah_username = $_POST['tambah_username'];
$tambah_password = $_POST['tambah_password'];

if(empty($tambah_username) or empty($tambah_password))
	{
	echo "Form ada yang kosong, mohon isi kembali.";
	}
	else
	{
		$tambah = mysql_query("INSERT INTO `login`(`username`, `password`) VALUES ('$tambah_username','$tambah_password')");
		if($tambah==TRUE)
		{
			header('Location: home.php') ;
		}
		else
		{
				echo "gagal";
		}
	}
?>