<script type="text/javascript">function
validasi(form){
	var ceknama=form.nama.value;
	var cekemail=form.email.value;
	var cekkomen=form.komentar.value;
	if (ceknama == 0 ) {
		alert("periksa kembali nama anda!");
		form.nama.focus();
		return (false);
	}
	if (cekemail==0 || cekemail.indexOF("@",1)==-1) {
		alert("periksa kembali email anda!");
		form.email.focus();
		return (false);
	}
	if (cekkomen==0) {
		alter("periksa kembali komentar anda!");
		form.komentar.focus();
		return(false);
		}
		return(true);
	}

</script>
    <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
  <title>Buku Tamu</title>
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
									<lable class="col-sm-3 col-form-label">Nama</lable>
									<div class="col-sm-9">
										<input type="text" name="nama" class="form control">
									</div>
								</div>
								<div class="form-grup row">
									<label class="col-sm-3 col-form-label">Email</label>
									<div class="col-sm-9">
										<input type="text" name="email" class="form-control">
									</div>
								</div>
								<div class="form-grup row">
									<label class="col-sm-3 col-form-label">Komentar</label>
									<div class="col-sm-9">
										<textarea name="komentar" class="form-"></textarea>
									</div>
								</div>
								<div class="form-grup row">
									<input type="submit" class="btn btn-success" name="submit" value="Proses">&nbsp
									<input type="reset" class="btn btn-danger" name="" value="Hapus">&nbsp
									<a class="btn btn-info" href="home.php">Kembali</a>&nbsp
								</div>
							</form>
							<br>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>
<?php

$submit=@$_POST['submit'];
if (isset($submit)) {
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$komentar=$_POST['komentar'];
	$conn=mysqli_connect("localhost","root","","bukutamu")or die("koneksi gagl");
	$sql="INSERT INTO bukutamu1 (nama, email, komentar)VALUES('$nama','$email','$komentar')";
	$result=mysqli_query($conn,$sql);
	if ($result==true) {
		?><script type="text/javascript">
			window.location='home.php';
		</script><?php
	}else{
		echo "error";
	}
}
?>