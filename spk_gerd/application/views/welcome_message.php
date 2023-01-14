
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
	<link href="<?=base_url('assets_')?>/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets_')?>/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets_')?>/src/plugins/src/animate/animate.css" rel="stylesheet" type="text/css" />
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
										<p class="mb-0">Belum Punya Akun ? <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rotateleftModal" class="text-warning">Sign Up</a></p>
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

<!-- modal -->   
<div id="rotateleftModal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" style="color: black">Register Pengguna</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
				</button>
			</div>
			<form action="javascript:void(0)" method="POST" id="form_pengguna">
				<div class="modal-body">
					<!-- form grid -->
					<div id="flFormsGrid" class="col-lg-12 layout-spacing">
						<input type="hidden" name="kdpengguna" id="kdpengguna">
						<div class="row">
							<div class="col-md-6 p-2">
								<label for="nik" class="form-label">NIK</label>
								<input type="number" id="nik" name="nik" class="form-control" placeholder="NIK" aria-label="NIK" required="">
							</div>
							<div class="col-md-6 p-2">
								<label for="nama_lengkap" class="form-label">Nama Lengkap</label>
								<input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" required="">
							</div>
							<div class="col-md-6 p-2">
								<label for="alamat" class="form-label">Alamat</label>
								<textarea class="form-control" required="" id="alamat" name="alamat"></textarea>
							</div>
							<div class="col-md-6 p-2">
								<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
								<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Kode Solusi" aria-label="Kode Solusi" required="">
							</div>
							<div class="col-md-6 p-2">
								<label for="no_hp" class="form-label">No Hp</label>
								<input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No Hp" aria-label="No Hp" required="">
							</div>
							<input type="hidden" name="akses" id="akses" value="psn">
							<div class="col-md-6 p-2">
								<label for="username" class="form-label">Username</label>
								<input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" required="">
							</div>
							<div class="col-md-6 p-2">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" required="">
							</div>
							<div class="col-md-6 p-2">
								<label for="username" class="form-label">Jenis Kelamin</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="lk" value="laki-laki" name="jk" class="custom-control-input">
									<label class="custom-control-label" for="lk">Laki - Laki</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="pr" name="jk" value="perempuan" class="custom-control-input">
									<label class="custom-control-label" for="pr">Perempuan</label>
								</div>
							</div>
						</div>

					</div>
					<!-- end form -->
				</div>
				<div class="modal-footer md-button">
					<button class="btn" type="button" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<circle style="fill:#FF6643;" cx="256" cy="256" r="256" />
							<path style="fill:#FF4F19;" d="M256,0v512c141.385,0,256-114.615,256-256S397.385,0,256,0z" />
							<polygon style="fill:#F2F2F4;" points="365.904,184.885 327.115,146.096 256,217.211 184.885,146.096 146.096,184.885 217.211,256 
							146.096,327.115 184.885,365.904 256,294.789 327.115,365.904 365.904,327.115 294.789,256 " />
							<polygon style="fill:#DFDFE1;" points="365.904,184.885 327.115,146.096 256,217.211 256,294.789 327.115,365.904 365.904,327.115 
							294.789,256 " />
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
						</svg>&nbsp;Batal
					</button>
					<button type="submit" name="submit" id="submit" class="btn btn-primary">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 280.028 280.028" style="enable-background:new 0 0 280.028 280.028;" xml:space="preserve">
							<g>
								<path style="fill:#324D5B;" d="M17.502,0h245.024c9.661,0,17.502,7.832,17.502,17.502v245.024c0,9.67-7.841,17.502-17.502,17.502
								H17.502C7.841,280.027,0,272.195,0,262.526V17.502C0,7.841,7.841,0,17.502,0z" />
								<path style="fill:#CCD0D2;" d="M52.505,175.017h175.017c9.661,0,17.502,7.841,17.502,17.502v87.509H35.003v-87.509
								C35.003,182.858,42.844,175.017,52.505,175.017z" />
								<path style="fill:#E4E7E7;" d="M52.505,157.515h175.017c9.661,0,17.502,7.841,17.502,17.502v26.253H35.003v-26.253
								C35.003,165.356,42.844,157.515,52.505,157.515z" />
								<path style="fill:#2B414D;" d="M245.024,0v105.01c0,9.67-7.841,17.502-17.502,17.502H52.505c-9.661,0-17.502-7.832-17.502-17.502V0
								H245.024z" />
								<path style="fill:#CCD0D2;" d="M122.512,0v96.259c0,4.83,3.92,8.751,8.751,8.751h87.509c4.839,0,8.751-3.92,8.751-8.751V0H122.512z
								M210.021,78.758c0,4.83-3.912,8.751-8.751,8.751h-8.751c-4.839,0-8.751-3.92-8.751-8.751V26.253c0-4.83,3.912-8.751,8.751-8.751
								h8.751c4.839,0,8.751,3.92,8.751,8.751V78.758z" />
							</g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
						</svg>&nbsp;
						Daftar
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$("#form_pengguna").submit(function(e){
		e.preventDefault();
		$.ajax({
			url:"<?=base_url('Welcome/saveRegister/')?>",
			type:"POST",
			data:$("#form_pengguna").serialize(),
			dataType:"JSON",
			success:function(data){
				if(data.status == true){
					Swal.fire(
						'Berhasil!',
						`${data.pesan}`,
						'success'
						)
					setTimeout(function(){
						//location.reload()
						$("#rotateleftModal").modal('hide');
					},1000)                 
				}else{
					Swal.fire(
						'Gagal!',
						`${data.pesan}`,
						'error'
						)
				}
			},
			error:function(er){
				Swal.fire(
					'Gagal!',
					'API GAGAL',
					'error'
					)
			}
		})
	})
</script>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>