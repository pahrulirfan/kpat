<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Tambah Data</title>
</head>
<body>
<div class="container">
	<h2>Tambah Data</h2>
	<hr>
	<form action="<?=site_url('blog/proses_tambah')?>" method="post">
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" name="txtjudul" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Isi</label>
			<textarea name="txtisi" id="" cols="30" rows="5" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="">Penulis</label>
			<input type="text" name="txtpenulis" class="form-control">
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<a href="<?=site_url('blog/index')?>" class="btn btn-warning">Batal</a>
	</form>
</div>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
