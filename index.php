<?php
session_start();
$pass_length = $_GET['password_length']; //'prendo' il dato inserito dall'utente
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
    <link rel="stylesheet" href="css/style.css">
    <title>Password Generator</title>
</head>

<body>
    <div class="wrapper d-flex justify-content-center align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <div class="pass-container">
                <form action="index.php" method="get" class="my-3">
                    <label for="password-length">Lunghezza password: </label>
                    <input type="text" id="password-length" name="password_length">
                    <button type="submit" class="btn btn-primary">Invio</button>
                </form>
                <?php if (isset($pass_length)) { ?>
                    <?php if (!(empty($pass_length)) && $pass_length > 0) { ?>
                        <div class="alert alert-success" role="alert">
                            La password generata è: <?php echo generate_password($pass_length) ?>
                        </div>

                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert">
                            INSERIRE UN DATO NUMERICO PARI O SUPERIORE A UNO
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>