<!DOCTYPE html>
<html lang="en">

<head>

	<title>Flat Able - Premium Admin Template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('assets/flat_able/') ?>assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url('assets/flat_able/') ?>assets/css/style.css">




</head>

<!-- [ auth-signup ] start -->
<form action="<?= base_url('registrasi/registrasi') ?> " method="post">
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <div class="card borderless">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="f-w-400">Registrasi</h4>
                            <hr>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="password" name="password" required>
                            </div>

                                <button class="btn btn-primary btn-block mb-4">simpan</button>
                            <hr>
                            <p class="mb-2"><a href="<?= base_url('auth') ?>" class="f-w-400">Signin</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="<?= base_url('assets/flat_able/') ?>assets/js/vendor-all.min.js"></script>
<script src="<?= base_url('assets/flat_able/') ?>assets/js/plugins/bootstrap.min.js"></script>




</body>

</html>
