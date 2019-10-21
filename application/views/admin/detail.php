<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail data
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $barang['nama_barang']; ?>
                    </h5>
                    <p class="card-text">
                    <?= $barang['jenis_barang']; ?>
                    </p>
                    <p class="card-text">
                    <?= $barang['harga']; ?>
                    </p>
                    <p class="card-text">
                    <?= $barang['stok']; ?>
                    </p>
                    <a href="<?= base_url(); ?>admin" class="btn btn-primary">back home</a>
                </div>
            </div>
        </div>
    </div>
</div>
