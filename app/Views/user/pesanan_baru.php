<?= $this->extend('layout/users/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="form">
        <form action="/user/pesananberhasil" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pilih Layanan</label>
                <input type="text" class="form-control" value="<?= $result['nama_layanan']; ?>" readonly>
                <input type="hidden" name="layanan" class="form-control" value="<?= $result['id_layanan']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" value="<?= $result['deskripsi']; ?>" name="deskripsi" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga/1k</label>
                <input type="text" class="form-control" value="<?= 'Rp. ' . number_format($result['harga']); ?>" readonly>
                <input type="hidden" class="form-control" value="<?= $result['harga']; ?>" name="harga" readonly>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <div class="col-6 pe-1">
                    <label for="exampleInputEmail1" class="form-label">Minimal Pesanan</label>
                    <input type="text" class="form-control" value="<?= number_format($result['min_pesan']); ?>" name="min_pesan" readonly>
                </div>
                <div class="col-6 ps-1">
                    <label for="exampleInputEmail1" class="form-label">Maximal Pesanan</label>
                    <input type="text" class="form-control" value="<?= number_format($result['max_pesan']); ?>" name="max_pesan" readonly>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Target</label>
                <input type="text" class="form-control" placeholder="Isi url target [Contoh: https://www.instagram.com/ekdwis_]" name="target" require>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                <input type="text" class="form-control" placeholder="Isi jumlah pesanan" name="jumlah" require>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="height: 40px;" name="payment">
                    <?php foreach ($payment as $pay) : ?>
                        <option value="<?= $pay['id_payment']; ?>"><?= $pay['nama_payment']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-purple mt-4 w-100">Pesan</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>