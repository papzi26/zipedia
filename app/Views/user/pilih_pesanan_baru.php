<?= $this->extend('layout/users/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="form">
        <form action="/user/postpesanan-baru" method="POST" enctype="multipart/form-data">
            <label for="exampleInputEmail1" class="form-label">Pilih Layanan</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="height: 40px;" name="jenis">
                <?php foreach ($result as $rs) : ?>
                    <option value="<?= $rs['id_layanan']; ?>"><?= $rs['nama_layanan']; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-purple mt-4 w-100">Pilih</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>