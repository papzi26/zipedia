<?= $this->extend('layout/admins/template'); ?>

<?= $this->section('content'); ?>
<div class="container mx-4">
    <h1 class="fw-bold mt-4">PEMESANAN</h1>
    <!-- Table  -->
    <table class="table table-bordered mt-5" style="width: 90%;">
        <thead>
            <tr>
                <th scope="col">ID Akun</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $rs) : ?>
                <tr>
                    <td><?= $rs['id_akun']; ?></td>
                    <td><?= $rs['nama']; ?></td>
                    <td><?= $rs['username']; ?></td>
                    <td><?= $rs['password']; ?></td>
                    <td><?= $rs['nama_role']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>