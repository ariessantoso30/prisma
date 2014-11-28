<html>
<head>
<link href="bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-3.1.1-dist/css/sticky-footer.css" rel="stylesheet">
<title>Log Kegiatan</title>
	<style>
                    .isi {
                        padding:45px;
                    }
					#headerprivate{
                        margin: 0;
                        padding: 3px;
						margin-bottom: 3px;
                    }
</style>
</head>
<body>
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
			<li><a href="home.php">Beranda</a></li>
			<li class="active"><a>Log Kegiatan</a></li>
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
			<h3 class="panel-title">
				Log Kegiatan 
			</h3>
			</div>
			<div class="panel-body">
			<table class="table table-hover">
			<thead>
				<tr>
					<td><b>Tanggal</b></td>
					<td><b>Pukul</b></td>
					<td><b>Kegiatan</b></td>
					<td><b>Username</b></td>
					<td><center><b>Hapus</b></center></td>
				</tr>
			</thead>
			<tbody>
			<?php
			$dapat=null;
			include "connect.php";
			//$pilih = "SELECT * FROM input_pemasukan";
			$tampil = mysql_query ("SELECT * FROM log");
			if (empty($tampil))
			{
			echo "Data Tidak Ditemukan";
			}
			else{
				while ($hsl = mysql_fetch_array($tampil))
				{
					echo "<tr>";
					echo "<td>".$hsl['tanggal']."</td>";
					echo "<td>".$hsl['pukul']."</td>";
					echo "<td>".$hsl['kegiatan']."</td>";
					echo "<td><center>".$hsl['usename']."</center></td>";
					echo "<td><center><button type=button class=btn btn-primary><b>Hapus</b></button></center><td>";
					echo "</tr>";
				}
			}
			

			?>
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><center><button type=button class=btn btn-primary><b>Hapus Semua</b></button></center></td>
				</tr>
			</tfoot>
			</table>
			</div>
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