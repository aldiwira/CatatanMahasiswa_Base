<?= 
form_open('login/proses_login');
 ?>

<div class="centering">
    <div class="box text-center">
        <div class="header">
            <img class="icon" src="<?= base_url() ?>assets/img/icon5.png" alt="">
            <h3>Login</h3>
        </div>
        <div class="mt-3">
            <form action="" autocomplate="off" role="form" class="form login-form" novalidate="" method="post">
                <div class="txtb">
                    <label class="float-left log" for="uname1">Username</label>
                    <input name="uname1" id="uname1" type="text">
                    <span data-placeholder="Username"></span>
                </div>
                <div class="txtb">
                    <label class="float-left log" for="pwd1">Password</label>
                    <input name="pwd1" id="pwd1" type="password">
                    <div class="invalid-feedback">Enter your password too</div>
                </div>
                <button type="submit" class="btn lo float-center" id="btnLogin">login</button>
                <a href="<?= base_url()?>login/register" class="btn reg float-center" id="btnLogin">Register</a>
                <div class="pesan">
                    <?php
                        if (isset($pesan)) {
                            echo $pesan;
                        } else {
                            echo "";
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?= 

form_close();

 ?>