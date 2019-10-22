<div class="container">
    <?php if ($this->session->flashdata('flash-data')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?= $this->session->flashdata('flash-data'); ?>
        </div>
    <?php } ?>
    <div class="row mt-4">
        
        <h2>Daftar User</h2>
            <div class="col-md-6 my-2">
                <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah User</a>
            </div>
    </div>
    <div class="mx-auto d-block mt-5">
        <ul class="list-group text-center"> 
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">level</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php foreach ($user as $mhs){?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $mhs->id ?></th>
                            <td><?php echo $mhs->username ?></td>
                            <td><?php echo $mhs->password ?></td>
                            <td><?php echo $mhs->level ?></td>
                            <td>
                                <a href="<?= base_url(); ?>admin/hapus_user/<?= $mhs->id; ?>" 
                                class="badge badge-danger"
                                onclick="return confirm('Yakin ingin menghapus data ini');">Hapus</a>
                                <a href="<?= base_url(); ?>admin/edit_user/<?= $mhs->id; ?>" 
                                class="badge badge-success">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </ul>
    </div>
</div>