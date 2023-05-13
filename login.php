<?php
    // require "head.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>X - Login</title>
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logos/android-icon-192x192.png">
    <link rel="icon" type="image/png" href="./assets/img/logos/android-icon-192x192.png">

    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="./assets/img/logo-ct.png" style="margin: -10px;">
    <link rel="stylesheet" href="./assets/css/login.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        //keyboard anti inspection
        document.addEventListener("keydown", function(e) {
        // if (e.key === "F12") { //no inspect
        //     e.preventDefault();
        //     window.location.replace("./css/");
        // }
        if (e.ctrlKey && e.key === "p") { //no print
            e.preventDefault();
        }
        });

        document.addEventListener('contextmenu', function(event) { //no right click
        event.preventDefault();
        });
    </script>
    
</head>

<body>
    <div class="container">
        
        <?php
            if (isset($_GET['stats'])) {
                if ($_GET['stats'] == 0) {
                    echo "<div class='alert alert-danger' role='alert'>Username atau Password Salah!</div>";
                } else if ($_GET['stats'] == 1) {
                    echo "<div class='alert alert-warning' role='alert'>Session Timeout</div>";
                }
            }
        ?>
        
        <div class="main">
            <div class= "atas" style="display: flex; gap:10px">
            <span  class="back">
                <p style="display: flex; gap: 8px"><i class="fa-solid fa-arrow-right-from-bracket"></i>Kembali</p>
            </span>
            <h3 style="margin-top:5%">HI, selamat datang di MAJAR!</h3>
            </div>
            <div class="login">
                <form method="post" action="phps/check_login.php">
                        <p style="margin-top: 15%; margin-left: 25%; margin-bottom:1px">Silahkan isi nomor telepon anda di bawah ini</p>
                        <div class="input-group-append">
                            <!-- <span class="input-group-text" style=" display: flex; border-top-left-radius: 0; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 0; border-left: 0; background-color: white; border-style: solid;padding: 0.7rem; margin-top: 20px; margin-left: 70px; border: 1px solid #e0dede; height: 16px; width: 0.8cm;">
                                <img style="width: 100%; padding-bottom: 10spx " src="./assets/img/Login/flag.jpg" alt=""> <p style= ""></p>
                            </span> -->
                            <span style= "display: flex; padding: 0.7rem; margin-left: 70px; border: 1px solid #e0dede; height: 16px; width: 8%; ">
                                <img src="./assets/img/Login/flag.jpg" style= "width: 1.5rem">+62
                        </span>
                            <input type="password" id="password" name="password" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Masukkan nomor telepon anda" style="width: 60%; margin-left: 10px; background-color: white; border: 1px solid #e0dede" required>
                            
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeS0wclAAAAAIOtQCQg-NHBznLQGPZ7U6wbC0oN"></div>
                    </div>
                    <button type="submit">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
    
</body>


<!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="js/sb-admin-2.min.js"></script> -->

<script>
    function password_show_hide(show, hide, password) {
        var x = document.getElementById(password);
        var show_eye = document.getElementById(show);
        var hide_eye = document.getElementById(hide);
        show_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            hide_eye.style.display = "none";
            show_eye.style.display = "block";
        } else {
            x.type = "password";
            hide_eye.style.display = "block";
            show_eye.style.display = "none";
        }
    }
</script>
<?php
    if(isset($_GET['alert'])){
        $alert = $_GET['alert'];
        echo "<script>alert('$alert');</script>";
    }
?>

</html>