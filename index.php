<?php
session_start();

if (isset($_SESSION['logged-user'])) {
    header("Location: ./pages/home.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="assets/images/icon.png">
        <title>Login | SkullCrusherz</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    </head>
    <body id="index-body">
        <div id="index-container">
            <div class="container col-sm-4" id="login-form">
                <div class="login-form-top">
                    <img src="assets/images/user.png" height="100%">
                </div>
                <h1 class="text-center" id="login-title">USER LOGIN</h1>
                
                <form class="form form-horizontal" method="POST" action="./login.php">
                    <div class="form-group">
                        <input type="text" id="txtUsername" name="txtUsername" class="form-control" autocomplete="off" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button id="btnLogin" class="btn btn-primary form-control">LOGIN</button>
                    </div>
                </form>
                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </body>
</html>