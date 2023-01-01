<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Edit Data</title>
</head>

<body>
	<div class="container">
		<h2>Edit Data</h2>
		<hr>
		<form action="<?= site_url('blog/proses_edit') ?>" method="post">
			<div class="form-group">
				<label for="">Judul</label>
				<input type="hidden" name="txtid" value="<?= $isi->id; ?>">
				<input type="text" name="txtjudul" class="form-control" value="<?= $isi->judul ?>">
			</div>
			<div class="form-group">
				<label for="">Isi</label>
				<textarea name="txtisi" id="" cols="30" rows="5" class="form-control"><?= $isi->isi ?></textarea>
			</div>
			<div class="form-group">
				<label for="">Penulis</label>
				<input type="text" name="txtpenulis" class="form-control" value="<?= $isi->penulis ?>">
			</div>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
			<a href="<?= site_url('blog/index') ?>" class="btn btn-warning">Batal</a>
		</form>
	</div>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
