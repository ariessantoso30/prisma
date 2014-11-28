<html>
<head>
<link href="bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-3.1.1-dist/css/sticky-footer.css" rel="stylesheet">
<title>Login</title>
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
	<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3 class="panel-title">Pengumuman</h3>
			</div>
			<div class="panel-body body">
			<strong>Perhatian kepada seluruh admin</strong><br>
			1. Jangan lupa menginput data pemasukan dari siswa<br>
			2. Bagi admin baru dapat menghubungi Aries untuk pemesanan username dan password<br>
			3. Seluruh ke sah-an data sepenuhnya ditanggungkan kepada admin<br>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3 class="panel-title">Login Admin</h3>
			</div>
			<div class="panel-body">
			<form role="form" method="post" action="login.php">
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
			</form>
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