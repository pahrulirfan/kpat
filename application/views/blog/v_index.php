<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Blog</title>
</head>
<body>
<div class="container">
	<h2>Data Blog</h2>
	<hr>
	<a href="<?= site_url('blog/tambah') ?>" class="btn btn-primary">Tambah Data</a> <br> <br>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Penulis</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$nomor = 1;
		foreach ($isi as $item) {
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $item->judul; ?></td>
				<td><?php echo $item->isi; ?></td>
				<td><?php echo $item->penulis; ?></td>
				<td>
					<a href="<?= site_url('blog/hapus/' . $item->id) ?>" class="btn btn-danger">Del</a>
					<a href="<?= site_url('blog/edit/' . $item->id) ?>" class="btn btn-warning">Edit</a>
				</td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
</div>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
