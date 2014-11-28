<html>
<head>
<link href="../bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap-3.1.1-dist/css/sticky-footer.css" rel="stylesheet">
<title>Input Pengeluaran Lainnya</title>
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
					.warna{
					background-color: #428bca;
					font-color: #000000
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
			<li class="active"><a href="#">Input Pengeluaran Lainnya</a></li>
			<li><a href="../laporan-akuntansi/laporan-akuntansi.php">Laporan Akuntansi</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3 class="panel-title">Input Pengeluaran Lainnya</h3>
			</div>
			<div class="panel-body">
			<form method="POST" action="olah-pengeluaran-lainnya.php" role="form">
			<table style="width:600px">
			<div class="form-group">
				<tr>
					<td>
						<label for="exampleInputEmail1">Id</label><br>
					</td>
					<td>
						<input name="id" type="text" class="form-control lebar" id="exampleInputUsername1" placeholder="Id">
					</td>
				</tr>
				<tr>
					<td>
						<label for="exampleInputEmail1">Tanggal Transaksi</label><br>
					</td>
					<td>
						<input name="tanggal_transaksi" type="date" class="form-control lebar" id="exampleInputUsername1" placeholder="Tanggal Transaksi">
					</td>
				</tr>
				<tr>
					<td>
						<label for="exampleInputEmail1">Transaksi</label><br>
					</td>
					<td>
						<input name="transaksi" type="text" class="form-control lebar" id="exampleInputUsername1" placeholder="Transaksi">
					</td>
				</tr>
				<tr>
					<td>
						<label for="exampleInputEmail1">Kuantitas</label><br>
					</td>
					<td>
						<input name="kuantitas" type="text" class="form-control lebar" id="exampleInputUsername1" placeholder="Kuantitas">
					</td>
				</tr>
				<tr>
					<td>	
						<label for="exampleInputEmail1">Harga</label><br>
					</td>
					<td>
						<input name="harga" type="text" class="form-control lebar" id="exampleInputUsername1" placeholder="Harga">
					</td>
				</tr>
				<tr>
					<td><button type="submit" class="btn btn-default">Tambah</button></td>
				</tr>
			</div>
			</table>
			</form>
			<div class="col-md-8"></div
			<div class="col-md-4">
			<form action="input-pengeluaran-lainnya.php" method="POST">
				<input list="browsers" name="dapat" placeholder="Tampilkan Sesuai ID">
				<datalist id="browsers">
					<?php
					include "../connect.php";
					$tampil = mysql_query ("SELECT DISTINCT id FROM olah_pengeluaran_lainnya");
					while ($hsl = mysql_fetch_array($tampil))
					{
							echo "<option value=".$hsl['id'].">";
					} ?>
				</datalist>
				<input type="submit">
			</form>
			</div>
			
			<table class="table table-hover">
			<thead>
				<tr>
					<td><b>Id<b></td>
					<td><b>Tanggal Transaksi<b></td>
					<td><b>Transaksi</b></td>
					<td><b>Kuantitas</td>
					<td><b>Harga @item</td>
					<td><b>Harga</b></td>
				</tr>
			</thead>
			<tbody>
				<?php
			$dapat=null;
			$hasil=0;
			$cari=$_POST['dapat'];

			include "../connect.php";
			//$pilih = "SELECT * FROM input_pemasukan";
			$tampil = mysql_query ("SELECT * FROM olah_pengeluaran_lainnya where id=$cari");
			if (empty($tampil))
			{
			echo "Data Tidak Ditemukan";
			}
			else{
				while ($hsl = mysql_fetch_array($tampil))
				{
					echo "<tr>";
					echo "<td>".$hsl['id']."</td>";
					echo "<td>".$hsl['tanggal_transaksi']."</td>";
					echo "<td>".$hsl['transaksi']."</td>";
					echo "<td>".$hsl['kuantitas']."</td>";
					echo "<td>".$hsl['harga']."</td>";
					echo "<td><center><button type=button class=btn btn-primary><b>Hapus</b></button></center></td>";
					echo "</tr>";
					$hasil=$hsl['harga']+$hasil;
				}
			}
			

			?>
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><b>Total Pengeluaran</td>
					<td><b><?php echo $hasil;?></b></td>
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
</html>S