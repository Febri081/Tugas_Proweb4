<?php
session_start();
if (isset($_SESSION["GAGAL"])) {
    //echo '<script>alert("Anda Gagal:' . $_SESSION['GAGAL'] . 'Kali")</script>';
    if ($_SESSION["GAGAL"] >= 3) {
        echo '<h1>ANDA DIBLOKIR</h1>';
        exit();
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TUGAS PROWEB_4</title>
        <link rel="icon" href="asset/images/php.png">
        <link rel="stylesheet"href="asset/css/bootstrap.css">
        <link rel="stylesheet"href="asset/css/floating-labels.css">
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/popper.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
        <style>
            body{background-image: url("back.jpg");background-repeat: no-repeat;
                 background-position: center;background-size: 70%;

            }
        </style> 
        <script>
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3000);

        </script>
    </head>
    <body>

        <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="90" height="90" src="asset/images/login.png" >
                <h1>Sign In</h1>
                <div class="alert alert-danger alert-dismissible fade show " role="alert">
                    Masukkan Account Anda!!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <?php
            if (isset($_SESSION["GAGAL"])) {
                if ($_SESSION["GAGAL"] <= 3) {
                    echo '<div class="alert alert-danger alert-dismissible fade show"role="alert">
                Anda Gagal:' . $_SESSION['GAGAL'] . 'Kali
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>     
                </button>
            </div>';
                }
            }
            ?>

            <div class="form-label-group">
                <input name="inEmail" class="form-control" type="email" id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes">
                <label for="inEmail">Email Address</label>
            </div>
            <div class="form-label-group">
                <input name="inPassword" class="form-control" type="password" id="inPassword" placeholder="Password" required="yes">
                <label for="inPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
            <button  type="submit" class=" btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#ModalKu">SIGN IN</button>
            <center><b>&COPY;FebriWulandari</b></center>
        </form>

        <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel01">
                            Peringatan
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Periksa Email Address dan Password Terlebih Dahulu. 
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
