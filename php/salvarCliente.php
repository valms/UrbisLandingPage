<?php

$servername = "127.0.0.1";
$username = "root";
$password = "tpCbC7BBFyEsR2HP";
$dbname = "urbis";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    var_dump(isset ($_POST ['nome']));

    if (isset ($_POST ['nome'])) {

        $nome =     $_POST ['nome'];
        $rua =      $_POST ['rua'];
        $cep =      $_POST ['cep'];
        $numero =   $_POST ['numero'];
        $bairro =   $_POST ['bairro'];
        $complemento = $_POST ['complemento'];
        $cidade =   $_POST ['cidade'];
        $uf =       $_POST ['uf'];
        $email =    $_POST ['email'];


        $stmt = $conn->prepare("INSERT INTO `clientes` ( `nome`, `enderecoRua`, `enderecoCep`, `enderecoNumero`, `enderecoBairro`, `enderecoComplemento`, `enderecoCidade`, `enderecoUf`, `email`)  VALUES(:nome, :rua, :cep, :numero, :bairro, :complemento, :cidade, :uf, :email)");

        $stmt->execute(array(
            ':nome' => $nome,
            ':rua' => $rua,
            ':cep' => $cep,
            ':numero' => $numero,
            ':bairro' => $bairro,
            ':complemento' => $complemento,
            ':cidade' => $cidade,
            ':uf' => $uf,
            ':email' => $email
        ));

        $conn = null;
    } else {
        echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

