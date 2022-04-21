<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="list-page">
    <h1 class="text-center">List Mahasiswa</h1>

    <div class="row">
        <div class="col-md-4">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Avatar</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><img src="/img/<?= $user['avatar'] ?>" alt=""></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="/list/<?= $user['id'] ?>" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>