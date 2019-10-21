<div class="container">
    <div class="centering">
        <div class="font-weight-bold mt-3">
            <h2>Tambah user</h2>
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
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="sumber">Sumber Artikel</label>
                    <input type="text" class="form-control" id="sumber" name="sumber">
                </div>
                <div class="form-group">
                    <label for="isi">Isi Artikel</label>
                    <textarea name="content" id="editor"></textarea>
                </div>
                <a class="btn btn-danger" href="<?= base_url(); ?>admin">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
            </form>
        </div>
    </div>
</div>