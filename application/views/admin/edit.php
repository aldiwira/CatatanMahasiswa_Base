<div class="centering">
    <div class="font-weight-bold mt-3">
        <h2>Edit <?= $barang['judul'] ?></h2>
    </div>
    <div class="card-body">
    <?php if (validation_errors()): ?>
        <div class="alert alert-warning" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" class="form-control" value="<?= $barang['judul'] ?>" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="sumber">Sumber Artikel</label>
                <input type="text" class="form-control" value="<?= $barang['sumber'] ?>" id="sumber" name="sumber">
            </div>
            <div class="form-group">
                <label for="isi">Isi Artikel</label>
                <textarea name="content" id="editor"><?= $barang['isi'] ?></textarea>
            </div>
            <a class="btn btn-danger" href="<?= base_url(); ?>admin">Cancel</a>
            <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
        </form>
    </div>
</div>