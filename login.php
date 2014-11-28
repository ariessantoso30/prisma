<?php
include "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$tanggal = date('l, d-m-Y');
$pukul = date('A : h : i : s');
$login = "Login";
$query2=mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'"); 
$cek2=mysql_num_rows($query2);

if(empty($username) or empty($password)){ 
//$_SESSION['username']=$username; 
//header('Location: home.php');
echo "Pasword dan Username Harus Diisi";
include "index.php";
}else{ 
	if($cek2==TRUE){
	header('Location: home.php') ; 
	}else{
	header('location: index.php');
	}
}

$cek=mysql_query("INSERT INTO `log`(`tanggal`, `pukul`, `kegiatan`, `usename`) VALUES ('$tanggal', '$pukul', '$login','$username')"); 
if($cek==TRUE)
		{
			echo "berhasil" ;
		}
		else
		{
			echo "Gagal";
		}
?>