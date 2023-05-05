<?php
session_start();
function generate_password($max_char) //funzione che genera la nuova password
{
    $char = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '$', '?', '@', '€', '£']; //array di caratteri usati
    $password = ''; //password generata
    for ($i = 0; $i < $max_char; $i++) { //ciclo for per la generazione della password
        $index = rand(0, sizeof($char) - 1); //indice generato in modo casuale
        $password .= $char[$index]; //l'indice usato prima mi servita per 'pescare' un carattere da $char e immetterlo in $password
    }
    $_SESSION['password'] = $password;
    header('Location: ./showpassword.php');
    return $password; //restituisco $password
}
