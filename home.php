

<!DOCTYPE html>
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<html>
<head>
<title>Buku Tamu</title>
</head>
<body >
	<div class="continer">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="bgform" align="center">
					<h3><b><font style="font-size: 40px;">
						Selamat Datang User <?php echo $_SESSION['nama_lengkap']?>
					</font></b></h3>
					<div style="width: 500px;">
						<br>
						<a class="btn btn-success" href="inputbt.php">Buku Tamu</a>&nbsp
						<a class="btn btn-danger" href="viewbt.php">Tampilkan</a>&nbsp
						<a class="btn btn-info" href="searchbt.php">Search</a>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>

