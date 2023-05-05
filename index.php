<?php
$pass_length = $_GET['password_length']; //'prendo' il dato inserito dall'utente
function generate_password($max_char) //funzione che genera la nuova password
{
    $char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%"; //insieme di caratteri usati
    $password = ''; //password generata
    for ($i = 0; $i < $max_char; $i++) { //ciclo for per la generazione della password
        $index = rand(0, strlen($char) - 1); //indice generato in modo casuale
        $password .= $char[$index]; //l'indice usato prima mi servita per 'pescare' un carattere da $char e immetterlo in $password
    }
    return $password; //restituisco $password
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
        <?php if (isset($pass_length)) { ?>
            <?php if (!(empty($pass_length)) && $pass_length === 0) { ?>
                <p>La password generata è: <?php echo generate_password($pass_length) ?></p>
            <?php } else { ?>
                <p>INSERIRE UN DATO NUMERICO PARI O SUPERIORE A UNO</p>
            <?php } ?>
        <?php } ?>
    </div>
</body>

</html>