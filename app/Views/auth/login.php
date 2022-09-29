<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZIPEDIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/user.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        text-decoration: underline;
        color: white;
    }

    ul li {
        list-style: none;
    }

    .text-purple {
        color: #6e33f5;
    }

    .btn-purple {
        color: #fff;
        background-color: #6e33f5;
        border-color: #6e33f5;
        height: 50px;
    }

    .form form .form-control,
    .form form .form-select {
        height: 65px;
        color: #999999 !important;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #fff !important;
    }
</style>

<body class="bg-dark text-white">
    <div class="container">
        <div class="top-content mt-5">
            <div class="d-flex justify-content-center" style="height: 60px;">
                <img src="img/logo.png" style="width: 60px; height: 60px;">
                <h1 style="line-height: 60px;" class="ms-3 fw-bold">ZIPEDIA</h1>
            </div>
            <div class="text-center mt-4 mb-5">
                <h3>Masuk untuk melanjutkan</h3>
            </div>
            <div class="form">
                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="floatingInput" placeholder="<?= lang('Auth.emailOrUsername') ?>" name="username">
                        <label for="floatingInput"><?= lang('Auth.emailOrUsername') ?></label>
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="floatingPassword" placeholder="<?= lang('Auth.password') ?>" name="password">
                        <label for="floatingPassword1"><?= lang('Auth.password') ?></label>
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple mt-4 w-100">Masuk</button>
                    <p class="text-center my-3"><small>or</small></p>
                    <p class="text-center"><?=lang('Auth.needAnAccount')?> <a href="<?= route_to('register') ?>" class="text-purple">Daftar</a></p>
                </form>
            </div>
        </div>
    </div>
    <footer class="mt-5 mb-4">
        <p style="position: absolute; bottom: 10px; width: 35%; left: 33.5%">Created with <i class="fa-solid fa-heart text-danger"></i></p>
    </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>
</body>

</html>