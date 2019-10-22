<div>
    <div class="text-center mt-5">
        <h5>Artikel Mahasiswa</h5>
    </div>
    <div>
        <?php foreach ($quote as $q) {?>
        <div class="content-list">
            <a class="content-item" href="<?= base_url(); ?>user/artikel/<?= $q->id; ?>">
                <h4><?php echo $q->judul ?></h4>
                <h6><em><?php echo $q->sumber ?></em></h6>
                <h6><em><?php echo $q->tanggal ?></em></h6>
            </a>
        </div>
        <?php }?>

    </div>
</div>