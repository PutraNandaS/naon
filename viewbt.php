<!DOCTYPE html>
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body>
	<div class="continer">
		<div class="row">
			<div class="coll-md-3"></div>
			<div class="col-md-6">
				<div class="bgform" align="center">
					<h3><b>BUKU TAMU</b></h3>
					<div style="width: 500px;">
						<br>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Komentar</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$conn=mysqli_connect("localhost","root","","bukutamu");
								$hasil=$conn -> query("select * from bukutamu1");
								if (mysqli_num_rows($hasil) > 0) {
									$no=0;
									while ($row=mysqli_fetch_array($hasil)) {
										$no++;
										echo ' <tr>
										<td>'.$no.'</td>
										<td>'.$row['nama'].'</td>
										<td>'.$row['email'].'</td>
										<td>'.$row['komentar'].'</td>
										</tr>';
									}
								}
								?>
							</tbody>
						</table>
						<a class="btn btn-into" href="home.php">Kembali</a>&nbsp
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="coll-md-3"></div>
	</div>
</div>
</body>
</html>