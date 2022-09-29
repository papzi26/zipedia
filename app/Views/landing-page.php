<?= $this->extend('layout/users/template.php'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <?php if (session()->getFlashdata('msg')) : ?> <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: absolute; top: 5px; right: 5px; width: 200px;">
        <?= session()->getFlashdata('msg'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<!-- <p class="fs-5">Jam Buka: <span class="btn btn-success">08:00 - 21:00</span></p> -->
<div class="top-content mt-4">
    <h3>Kategori</h3>
    <div class="owl-carousel my-4" style="font-size: 12px;">
        <?php foreach ($result as $rs) : ?>
            <a href="kategori/<?= $rs['url']; ?>" class="card bg-dark">
                <img src="img/<?= $rs['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-center"><?= $rs['nama_jenis']; ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="middle-content">
    <h2 class="text-center mb-3">ORDER</h2>
    <h3 class="mb-4">Instagram</h3>
    <ul class="d-flex flex-column">
        <li>
            <div class="d-flex">
                <img src="img/ig.png" style="width: 25%;">
                <div class="right ms-4 w-75">
                    <p>1000 Followers Indonesia</p>
                    <div class="d-flex justify-content-between">
                        <small>Rp. 10.000</small>
                        <a href="/user/pesanan" class="btn btn-purple">Beli</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="mt-4">
            <div class="d-flex">
                <img src="img/ig.png" style="width: 25%;">
                <div class="right ms-4 w-75">
                    <p>500 Likes Indonesia</p>
                    <div class="d-flex justify-content-between">
                        <small>Rp. 12.000</small>
                        <button type="submit" class="btn btn-purple">Beli</button>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <h3 class="my-4">Facebook</h3>
    <ul class="d-flex flex-column">
        <li>
            <div class="d-flex">
                <img src="img/fb.png" style="width: 25%;">
                <div class="right ms-4 w-75">
                    <p>1000 Followers Indonesia</p>
                    <div class="d-flex justify-content-between">
                        <small>Rp. 10.000</small>
                        <button type="submit" class="btn btn-purple">Beli</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="mt-4">
            <div class="d-flex">
                <img src="img/fb.png" style="width: 25%;">
                <div class="right ms-4 w-75">
                    <p>500 Likes Indonesia</p>
                    <div class="d-flex justify-content-between">
                        <small>Rp. 12.000</small>
                        <button type="submit" class="btn btn-purple">Beli</button>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 3,
                nav: true
            },
            600: {
                items: 4,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    })
</script>


<?= $this->endSection(); ?>