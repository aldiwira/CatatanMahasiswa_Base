<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/admin.css" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/user.css" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" />
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
		body{
			background: #c7c7c7;
			background-size: cover;
            font-family: 'Source Sans Pro', sans-serif;
			color: white;
			transition: all 5s;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="top-header">
                <div class="header">
                    <img src="<?= base_url() ?>assets/img/icon5.png" alt="">
                    <h5 class="textHeader">Semua Tentang Curahan Hati Mahasiswa</h5>
                    <hr class="garis">
                    <div class="header m">
                        <a class="active" href="<?= base_url(); ?>user">Home</a>
                        <!-- <a href="">Buat Artikel</a>  -->
                        <a href="<?= base_url(); ?>user/keluar">Keluar</a> 
                    </div>
                </div>
                <?= $content ?>
                <hr class="garis">
                <div class="bottom text-center">
                    <img src="<?= base_url() ?>assets/img/icon5.png" alt="">
                    <p>Coretan Mahasiswa Official Website</p>
                    <p>Dikelola Oleh Mahasiswa Prodi Manajemen Informatika Politeknik Negeri Malang</p>		
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/lib/jquery/jquery-3.3.1.slim.min.js"></script>
        <script src="<?= base_url() ?>assets/lib/jquery/popper.min.js"></script>
        <script src="<?= base_url() ?>assets\lib\ckeditor/ckeditor.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                            console.log( editor );
                    } )
                    .catch( error => {
                            console.error( error );
                    } );
        </script>
    </body>
</html>
