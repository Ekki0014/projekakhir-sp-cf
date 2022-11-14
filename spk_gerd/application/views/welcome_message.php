
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>SignIn Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
	<link rel="icon" type="image/x-icon" href="<?=base_url('assets_')?>/src/assets/img/favicon.ico"/>
	<link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
	<script src="<?=base_url('assets_')?>/layouts/vertical-light-menu/loader.js"></script>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="<?=base_url('assets_')?>/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets_')?>/src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />

	<link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets_')?>/src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?=base_url('assets_')?>/src/plugins/src/sweetalerts2/sweetalerts2.css">
	<link href="<?=base_url('assets_')?>/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets_')?>/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
	<script src="<?=base_url('assets_')?>/src/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url('assets_')?>/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
	<!-- END GLOBAL MANDATORY STYLES -->

</head>
<script>
	<?php
	$berhasil = $this->session->userdata('gagal');
	if ($berhasil) {
		?>
		$(document).ready(function() {
			Swal.fire(
				'GAGAL!',
				`<?=$berhasil?>`,
				'error'
				)
		})
		<?php $this->session->unset_userdata('gagal');
	} ?>
</script>
<body class="form">

	<!-- BEGIN LOADER -->
	<div id="load_screen"> <div class="loader"> <div class="loader-content">
		<div class="spinner-grow align-self-center"></div>
	</div></div></div>
	<!--  END LOADER -->

	<div class="auth-container d-flex">

		<div class="container mx-auto align-self-center">

			<div class="row">

				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
					<div class="card mt-3 mb-3">
						<div class="card-body">
							<form action="<?=base_url('Welcome')?>" method="POST">
								<div class="row">
									<div class="col-md-12 mb-3">

										<h2>Log In</h2>
										<p>Sistem Pakar Penyakit Lambung</p>

									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input type="text" name="username" id="username" required="" class="form-control">
										</div>
									</div>
									<div class="col-12">
										<div class="mb-4">
											<label class="form-label">Password</label>
											<input type="password" name="password" id="password" class="form-control">
										</div>
									</div>
						<!-- 		<div class="col-12">
									<div class="mb-3">
										<div class="form-check form-check-primary form-check-inline">
											<input class="form-check-input me-3" type="checkbox" id="form-check-default">
											<label class="form-check-label" for="form-check-default">
												Remember me
											</label>
										</div>
									</div>
								</div> -->

								<div class="col-12">
									<div class="mb-4">
										<button type="submit" id="submit" name="submit" class="btn btn-secondary w-100">SIGN IN</button>
									</div>
								</div>

								<!-- <div class="col-12 mb-4">
									<div class="">
										<div class="seperator">
											<hr>
											<div class="seperator-text"> <span>Or continue with</span></div>
										</div>
									</div>
								</div> -->

							<!-- 	<div class="col-sm-4 col-12">
									<div class="mb-4">
										<button class="btn  btn-social-login w-100 ">
											<img src="<?=base_url('assets_')?>/src/assets/img/google-gmail.svg" alt="" class="img-fluid">
											<span class="btn-text-inner">Google</span>
										</button>
									</div>
								</div>

								<div class="col-sm-4 col-12">
									<div class="mb-4">
										<button class="btn  btn-social-login w-100">
											<img src="<?=base_url('assets_')?>/src/assets/img/github-icon.svg" alt="" class="img-fluid">
											<span class="btn-text-inner">Github</span>
										</button>
									</div>
								</div> -->

							<!-- 	<div class="col-sm-4 col-12">
									<div class="mb-4">
										<button class="btn  btn-social-login w-100">
											<img src="<?=base_url('assets_')?>/src/assets/img/twitter.svg" alt="" class="img-fluid">
											<span class="btn-text-inner">Twitter</span>
										</button>
									</div>
								</div> -->

								<div class="col-12">
									<div class="text-center">
										<p class="mb-0">Belum Punya Akun ? <a href="javascript:void(0);" class="text-warning">Sign Up</a></p>
									</div>
								</div>
							</form>

						</div>

					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>