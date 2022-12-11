<?php

$caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!<>£$%&/()=?[]{}-_+*";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ottiene il numero di caratteri scelto dallo slider (X)
  $lunghezzaPass = $_POST["lunghezzaPass"];

  if ($lunghezzaPass != 0) {
    // Mescola l'array di caratteri
    $comb = str_shuffle($caratteri);
    // Sceglie i primi X caratteri tra l'array mescolato
    $password = substr($comb,0,$lunghezzaPass);
  }
}
?>