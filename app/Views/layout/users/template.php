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

    .btn-purple {
        color: #fff;
        background-color: #6e33f5;
        border-color: #6e33f5;
    }

    .profile li a:hover {
        background: none;
    }

    .form form .form-control, .form form .form-select {
        height: 40px;
        color: #999999 !important;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #fff !important;
    }
</style>

<body class="bg-dark text-white">
    <div class="container">
        <!-- Header  -->
        <ul class="d-flex justify-content-between mt-3 mb-3">
            <li class="nav-item">
                <img src="/img/logo-with-text.png" style="height: 40px;">
                <!-- <a class="fw-bold fs-3" aria-current="page" href="/" style="line-height: 40px;">ZIPEDIA</a> -->
            </li>
            <li class="nav-item dropdown mt-2 me-4">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end bg-dark profile" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white" href="#!">Riwayat Pemesanan</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item text-white" href="/logout">Logout</a></li>
                </ul>
            </li>
        </ul>

        <?= $this->renderSection('content'); ?>
        <footer class="mt-5 mb-4">
            <p class="text-center">Created with <i class="fa-solid fa-heart text-danger"></i></p>
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