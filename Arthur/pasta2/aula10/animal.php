<?php

    require "Animais.php";

    $novo_animal = new Animais;
    $novo_animal2 = new Animais;

    $novo_animal->nome = "Tatu";
    $novo_animal->idade = "12";
    $novo_animal->quant_patas = "4";
    $novo_animal->sexo = "masculino";

    $novo_animal2->nome = "cachorro";
    $novo_animal2->idade = "4";
    $novo_animal2->quant_patas = "4";
    $novo_animal2->sexo = "feminino";

    echo "Nome: " . $novo_animal->nome . "<br>".
        "idade: " . $novo_animal->idade . "<br>".
        "quantidade de patas: " . $novo_animal->quant_patas . "<br>".
        "sexo: " . $novo_animal->sexo . "<br>";

    echo "Nome: " . $novo_animal2->nome . "<br>".
        "idade: " . $novo_animal2->idade . "<br>".
        "quantidade de patas: " . $novo_animal2->quant_patas . "<br>".
        "sexo: " . $novo_animal2->sexo . "<br>";

?>