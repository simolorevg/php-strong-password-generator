<?php
session_start();
include __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <title>New password</title>
</head>

<body>
    <div class="wrapper">
        <h1>PASSWORD GENERATA</h1>
        <div class="container">
            <div class="pass-container">
                <?php if (isset($_SESSION['password'])) { ?>
                    <?php if (!(empty($_SESSION['password'])) && $_SESSION['password'] > 0) { ?>
                        <div class="alert alert-success" role="alert">
                            La password generata è: <?php echo $_SESSION['password'] ?>
                        </div>

                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert">
                            INSERIRE UN DATO NUMERICO PARI O SUPERIORE A UNO
                        </div>

                    <?php } ?>
                <?php } ?>
                <button type="button" class="btn btn-danger"><a href="index.php" class="text-white text-decoration-none">Torna alla home</a></button>
            </div>
        </div>
    </div>
</body>

</html>