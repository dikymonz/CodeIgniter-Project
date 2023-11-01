<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Komik</h1>
            <a href="/komik" class="btn btn-outline-dark mb-3"><i class="bi bi-arrow-left-short"></i> Kembali ke daftar Komik</a>

            <div class="card border-dark mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul'] ?></h5>
                            <p class="card-text"><b>Penulis : </b><?= $komik['penulis'] ?></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Penerbit : </b><?= $komik['penerbit'] ?></small></p>

                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
                            <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i> Delete</button>

                                <!-- Modal -->
                                <div class="modal" tabindex="-1" id="deleteModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Dikymonz | Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><i class="bi bi-exclamation-circle"></i> Apakah anda yakin ingin menghapus Komik ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="bi bi-check-lg"></i> Konfirmasi</button>
                                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="bi bi-x"></i> Batalkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>