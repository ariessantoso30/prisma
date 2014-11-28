<html>
<head>
<link href="bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-3.1.1-dist/css/sticky-footer.css" rel="stylesheet">
<title>Beranda</title>
	<style>
                    .isi {
                        padding:45px;
                    }
					#headerprivate{
                        margin: 0;
                        padding: 3px;
						margin-bottom: 3px;
                    }
					.lebar{
					width: 300px;
					}
					.lebar2{
					width: 200px;
					}
	</style>
</head>
<body>
<?php
			include "connect.php";
			$update = mysql_query("SELECT * FROM login");
			while($hasil = mysql_fetch_array($update))
			{
			$user=$hasil['username'];
			$pass=$hasil['password'];
			}
			?>
<!--Navbar Mulai-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
		<img id="headerprivate" src="mini-logo.png">
	</div>
  </div>
</nav>
<!--Navbar Selesai-->
<!--Isi Mulai-->
<div class="isi"></div>
<div class="col-md-12">
<div class="container">
<div class="row">
	<div class="col-md-3">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a>Beranda</a></li>
			<li><a href="log-kegiatan.php">Log Kegiatan</a></li>
			<li><a href="input-pemasukan/input-pemasukan.php">Input Pemasukan</a></li>
			<li><a href="input-pengeluaran-pengajar/input-pengeluaran-pengajar.php">Input Pengeluaran Pengajar</a></li>
			<li><a href="input-pengeluaran-lainnya/input-pengeluaran-lainnya.php">Input Pengeluaran Lainnya</a></li>
			<li><a href="laporan-akuntansi/laporan-akuntansi.php">Laporan Akuntansi</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3 class="panel-title">Beranda</h3>
			</div>
		<div class="panel-body">
			<div class="col-md-6">
			<h3>Ubah Password dan Username</h3>
			<form role="form" method="post" action="update.php">
			<table style="width:350px">
			<div class="form-group">
				<tr>
					<td>
						<label for="exampleInputEmail1">Username Baru</label><br>
					</td>
					<td>
						<input name="update_username" type="text" class="form-control lebar2" id="exampleInputUsername1" placeholder="Username Baru"" >
					</td>
				</tr>
				<tr>
					<td>
						<label for="exampleInputEmail1">Password Baru</label><br>
					</td>
					<td>
						<input name="update_password" type="password" class="form-control lebar2" id="exampleInputUsername1" placeholder="Password Baru" >
					</td>
				</tr>
				<tr>
					<td><button type="submit" class="btn btn-default">Simpan</button></td>
				</tr>
			</div>
			</table>
			</form>
			</div>
			<div class="col-md-6">
			<h3>Tambah User</h3>
			<form role="form" method="post" action="tambah_user.php">
			<table style="width:350px">
			<div class="form-group">
				<tr>
					<td>
						<label for="exampleInputEmail1">Username</label><br>
					</td>
					<td>
						<input name="tambah_username" type="text" class="form-control lebar2" id="exampleInputUsername1" placeholder="Username Baru"" >
					</td>
				</tr>
				<tr>
					<td>
						<label for="exampleInputEmail1">Password</label><br>
					</td>
					<td>
						<input name="tambah_password" type="password" class="form-control lebar2" id="exampleInputUsername1" placeholder="Password Baru" >
					</td>
				</tr>
				<tr>
					<td><button type="submit" class="btn btn-default">Tambah</button></td>
				</tr>
			</div>
			</table>
			</form>
			</div>
		</div>
	
		<table class="table table-hover">
			<thead>
				<tr>
					<td><b>Nama User</b></td>
					<td><b>Password user</td>
					<td><b><center>Hapus User</center></td>
				</tr>
			</thead>
			<tbody>
				<?php
			$dapat=null;
			$hasil=0;

			include "connect.php";
			//$pilih = "SELECT * FROM input_pemasukan";
			$tampil = mysql_query ("SELECT * FROM login");
			if (empty($tampil))
			{
			echo "Data Tidak Ditemukan";
			}
			else{
				while ($hsl = mysql_fetch_array($tampil))
				{
					echo "<tr>";
					echo "<td>".$hsl['username']."</td>";
					echo "<td>".$hsl['password']."</td>";
					echo "<td><center><button type=button class=btn btn-primary><b>Hapus</b></button></center></td>";
					echo "</tr>";
				}
			}
			

			?>
			</tbody>
			</table>
		
		</div>	
	</div>
</div>
</div>
</div>

<!--Footer awal-->
	<div id="footer">
      <div class="container">
        <p class="text-muted"><center>Copyright @ 2014-2015 PRISMA ACCOUNTING SYSTEM, All Rights Reserved.</center></p>
      </div>
    </div>
<!--Footer Selesai-->

</body>
</html>