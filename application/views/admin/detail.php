<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail data
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $barang['judul']; ?>
                    </h5>
                    <p class="card-text">
                    <?= $barang['sumber']; ?>
                    </p>
                    <p class="card-text">
                    <?= $barang['tanggal']; ?>
                    </p>
                    <p class="card-text">
                    <?= $barang['isi']; ?>
                    </p>
                    <a href="<?= base_url(); ?>admin" class="btn btn-primary">back home</a>
                </div>
            </div>
        </div>
    </div>
</div>
