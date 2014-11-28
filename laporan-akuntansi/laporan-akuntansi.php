<html>
<head>
<link href="../bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap-3.1.1-dist/css/sticky-footer.css" rel="stylesheet">
<title>Laporan Akuntansi</title>
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
		<img id="headerprivate" src="../mini-logo.png">
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
			<li><a href="../home.php">Beranda</a></li>
			<li><a href="../log-kegiatan.php">Log Kegiatan</a></li>
			<li><a href="../input-pemasukan/input-pemasukan.php">Input Pemasukan</a></li>
			<li><a href="../input-pengeluaran-pengajar/input-pengeluaran-pengajar.php">Input Pengeluaran Pengajar</a></li>
			<li><a href="../input-pengeluaran-lainnya/input-pengeluaran-lainnya.php">Input Pengeluaran Lainnya</a></li>
			<li class="active"><a>Laporan Akuntansi</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3 class="panel-title">Laporan Akuntansi</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-3">
					<img id="headerprivate" src="../laporan-logo.png">
				</div>
				<div class="col-md-9">
					<h1><center><b>Bimbingan Belajar Prisma Privat <br></b><center></h1>
					<h4><center>Jl Babakan Raya, no 13, kab bogor, Telpon : 0251-938745 Kode pos :13524, email : prismaprivat@gmail.com</center></h4>
				</div>
					<div class="col-md-12">
<!-- .......................................................................... -->
					<h3><b>Tabel Pemasukan</b></h3>
					<table class="table table-hover">
					<thead>
					<tr>
						<td><b>Nama Siswa</b></td>
						<td><b>Nama Pengirim</td>
						<td><b>Tanggal Terima</td>
						<td><b>Jumlah</b></td>
					</tr>
					</thead>
					<tbody>
							<?php
							$dapat=null;
							$hasil=0;
							$cari=$_POST['dapat'];
							$cari=2;

							include "../connect.php";
							//$pilih = "SELECT * FROM input_pemasukan";
							$tampil = mysql_query ("SELECT * FROM input_pemasukan where id=$cari");
							if (empty($tampil))
							{
							echo "Data Tidak Ditemukan";
							}
							else{
								while ($hsl = mysql_fetch_array($tampil))
								{
									echo "<tr>";
									echo "<td>".$hsl['nama_siswa']."</td>";
									echo "<td>".$hsl['nama_pengirim']."</td>";
									echo "<td>".$hsl['tanggal_terima']."</td>";
									echo "<td>".$hsl['jumlah']."</td>";
									echo "</tr>";
									$hasil=$hsl['jumlah']+$hasil;
								}
							}
							?>
						</tbody>
						<tfoot>
						<td></td>
						<td></td>
						<td><b>Total Pemasukan</b></td>
						<td><?php echo "$hasil"; ?></td>
						</tr>
						</tfoot>
					</table>
					</div>
<!-- .......................................................................... -->
					<div class="col-md-12">
					<br>
					<h3><b>Tabel Pengeluaran Pengajar</b></h3>
					<table class="table table-hover">
					<thead>
					<tr>
						<td><b>Nama Pengajar</b></td>
						<td><b>Nama Siswa</b></td>
						<td><b>No Rekening</td>
						<td><b>Tanggal Kirim</b></td>
						<td><b>Jumlah</b></td>
					</tr>
					</thead>
					<tbody>
							<?php
								$cari=$_POST['dapat'];
								$tampilpp = mysql_query ("SELECT * FROM input_pemasukan where id=$cari");
								if (empty($tampilpp))
								{
								echo 'mysql_error';
								}
								else{
									while ($hslpp = mysql_fetch_array($tampilpp))
									{
										echo "<tr>";
										echo "<td>".$hslpp['nama_pengajar']."</td>";
										echo "<td>".$hslpp['nama_siswa']."</td>";
										echo "<td>".$hslpp['no_rekening']."</td>";
										echo "<td>".$hslpp['tanggal_kirim']."</td>";
										echo "<td>".$hslpp['jumlah']."</td>";
										echo "</tr>";
										$hasilppf=$hslpp['jumlah']+$hasilppf;
									}
								}
							?>
						</tbody>	
						<tfoot>
						<tr>
						<td></td>
						<td></td>
						<td><b>Total Pemasukan</b></td>
						<!--<td><?php echo $hasilppf; ?></td>-->
						</tr>
						</tfoot>
					</table>
					</div>
<!-- .......................................................................... -->
				<?php>
				if(isset($_POST['submit'])){
				Perintah Proses;
				}?>
				<form action"#" method="post" id="form1">
				<button type="submit" name="submit" form="form1" value="Submit">Print Screen</button>
				</form>
				</div>
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
</html>S