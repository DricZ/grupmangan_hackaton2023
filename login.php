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

    <title>Yoongmotor - Login Admin</title>
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logos/android-icon-192x192.png">
    <link rel="icon" type="image/png" href="./assets/img/logos/android-icon-192x192.png">

    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="./assets/img/logo-ct.png" style="margin: -10px;">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
            <div class="login">
                <form method="post" action="phps/check_login.php">
                    <label for="chk" aria-hidden="true"><img src="./assets/img/icons/android-icon-192x192.png" style="width: 40%;"></label>
                    
                        <input type="text" name="username" placeholder="Username" required>
                    <div class="form-group">
                        <div class="input-group-append">
                            <input type="password" id="password" name="password" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Password" style="border-top-right-radius: 0; border-bottom-right-radius: 0; border-right: 0; margin-right: 0; margin-left: 60px; width: 50%;" required>
                            <span class="input-group-text" onclick="password_show_hide('show_eye', 'hide_eye', 'password');" style="border-top-left-radius: 0; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 0; border-left: 0; background-color: #e0dede; padding: 0.7rem; margin-top: 20px; border: 1px solid #e0dede; height: 16px; width: 11px;">
                                <i class="fas fa-eye d-none" id="show_eye"></i>
                                <i class="fas fa-eye-slash" id="hide_eye"></i>
                            </span>
                        </div>
                        <div class="input-group-append" style="justify-content: center;">
                            <a id="fpass" href="./fpassword.php">Lupa Password?</a>
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="6LeS0wclAAAAAIOtQCQg-NHBznLQGPZ7U6wbC0oN"></div>
                    </div>
                    <button>Login</button>
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