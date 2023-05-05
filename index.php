<?php
$pass_length = $_GET['password_length'];
function generate_password($pass_length)
{
    $char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%";
    $password = '';
    for ($i = 0; $i < $pass_length; $i++) {
    }
}
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
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center">Strong Password Generator</h1>
        <form action="index.php" method="get" class="my-3">
            <label for="password-length">Lunghezza password: </label>
            <input type="text" id="password-length" name="password_length">
            <button type="submit" class="btn btn-primary">Invio</button>
        </form>
    </div>
    <?php
    echo $pass_length;
    ?>
</body>

</html>