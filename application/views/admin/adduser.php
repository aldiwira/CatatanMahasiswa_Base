<div class="container">
    <div class="centering">
        <div class="font-weight-bold mt-3">
            <h2>Tambah User Baru</h2>
        </div>
        <div class="card-body">
        <?php if (validation_errors()): ?>
            <div class="alert alert-warning" role="alert">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="level">Jurusan</label>
                    <select name="level" id="level" class="form-control">
                        <option value="#" >pilih level user</option>
                        <?php foreach ($level as $key) {
                            ?>
                                <option value="<?=$key ?>" ><?=$key ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <a class="btn btn-danger" href="<?= base_url(); ?>admin/user">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary" float="none">Submit</button>
            </form>
        </div>
    </div>
</div>