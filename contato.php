<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $texto = $_POST['texto'];
    $idade = (int)$_POST['idade'];
    $dias_vida = $idade * 365;

    echo "Seu nome é " . $nome . "</br>";
    echo "Seu e-mail é " . $email . "</br>";
    echo "Sua mensagem é <p>" . $texto . "</p>";
    echo "</br>";

    var_dump($_POST);
    var_dump($idade);
    var_dump($dias_vida);
?>