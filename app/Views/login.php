<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons -->
    <link href="<?= base_url('assets_frontend/img/favicon.png')?>" rel="icon">
    <link href="<?= base_url('assets_frontend/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <title>Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets_backend/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets_backend/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="card o-hidden border-0 shadow-lg my-5 col-sm-6" align="center">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img class="img-profile"
                                    src="<?= base_url('assets_frontend/img/favicon.png') ?>" width="120px"><br><br>
                                    <h1 class="h4 text-gray-900 mb-4">BLKK SHIROTUL FALAH</h1>
                                </div>
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" align="left">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form class="user" method="post" action="<?= base_url('/login/process'); ?>">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                    placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <a href="<?=base_url ('blkk')?>" class="btn btn-success btn-user btn-block">
                                    Kembali
                                </a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets_backend/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets_backend/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets_backend/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets_backend/js/sb-admin-2.min.js')?>"></script>

</body>

</html>