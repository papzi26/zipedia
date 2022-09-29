<?= $this->extend('layout/admins/template'); ?>

<?= $this->section('content'); ?>
<div class="container mx-4">
    <h1 class="fw-bold mt-4">PEMESANAN</h1>
    <!-- Table  -->
    <table class="table table-bordered mt-5" style="width: 90%;">
        <thead>
            <tr>
                <th scope="col">ID Pemesanan</th>
                <th scope="col">Pembeli</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Jenis Pesanan</th>
                <th scope="col">Harga</th>
                <th scope="col">Waktu</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $rs) : ?>
                <tr>
                    <td><?= $rs['id_pemesanan']; ?></td>
                    <td><?= $rs['username']; ?></td>
                    <td><?= $rs['jumlah_pesanan']; ?></td>
                    <td><?= $rs['nama_jenis']; ?></td>
                    <td><?= $rs['harga']; ?></td>
                    <td><?= $rs['tanggal_pemesanan']; ?></td>
                    <td style="color: <?= $rs['color_status']; ?>;" class="fw-bold">
                        <?= $rs['nama_status']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>