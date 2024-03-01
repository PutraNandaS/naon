<script type="text/javascript">
		function validasi(form){
		var cekcari=form_cari_value;
		if (cekcari==0) {
			alert("Maukan kata kunci!");
			form.cari.focus();
			return(false);
		}
		return(true);
	}
</script>
<head>
  <title>Buku Tamu</title>
   <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="continer">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="bgform" align="center">
					<h3><b>BUKU TAMU</b></h3>
					<div style="width:500px;">
						<br>
						<div style="width:500px;" align="left">
							<form role="form" method="post" onsubmit="return validasi(this)">
								<div class="form-group row">
									<lable class="col-md-3 col-form-label">Kolom</lable>
									<div class="col-sm-9">
										<select class="foem-control" name="kolom">
											<option value="nama">Nama</option>
											<option value="email">Email</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Kata Kunci</label>
									<div class="col-sm-9">
										<input type="text" name="cari" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<input type="submit" class="btn btn-success" name="submit" value="proses">&nbsp
									<input type="reset" class="btn btn-danger" value="hapus">&nbsp
									<a class="btn btn-info" href="home.php">Kembali</a>&nbsp
								</div>
							</form>
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
									$kolom=$_POST['kolom'];
									$cari=$_POST['cari'];
									$conn=mysqli_connect("localhost","root","","bukutamu");
									$hasil=$conn->query("select * from bukutamu1 where $kolom like'%$cari%'");
									if ($cari=="") {
										echo "";
									}else{
										$jumlah=mysqli_num_rows($hasil);
										echo "ditemukan: $jumlah";
										if (mysqli_num_rows($hasil) > 0) {
											$no=0;
											while ($row=mysqli_fetch_array($hasil)) {
												$no++;
												echo '
												<tr>
												
												<td>'.$row['nama'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['komentar'].'</td>
												</tr>';
											}
										}
									}
									?>
								</tbody>
							</table>
							<br>
						</div>
					</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>