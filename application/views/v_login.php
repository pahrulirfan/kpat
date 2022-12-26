<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Login</title>
</head>
<body>
<div class="container">
	<h2>Login</h2>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<form action="<?=site_url('login/poses_login')?>" method="post">
						<div class="mb-3">
							<label for="">Username</label>
							<input type="text" name="txtusername" class="form-control">
						</div>
						<div class="mb-3">
							<label for="">Password</label>
							<input type="password" name="txtpassword" class="form-control">
						</div>
						<input type="submit" name="Login" value="Login" class="btn btn-info">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
