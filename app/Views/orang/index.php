<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Daftar Data</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keywoard">
                    <div class="input-group-append"><button class="btn btn-outline-dark" type="submit" id="basic-addon2"><i class="bi bi-search"></i> Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <caption>List of People</caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (6 * ($currentPage - 1)) ?>
                        <?php foreach ($orang as $o) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $o['nama']; ?></td>
                                <td><?= $o['alamat'] ?></td>
                                <td>
                                    <a href="" class="btn btn-outline-dark"><i class="bi bi-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links('orang', 'orang_pagination'); ?>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>