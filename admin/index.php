<?php

$servername = "127.0.0.1";
$username = "root";
$password = "tpCbC7BBFyEsR2HP";
$dbname = "urbis";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        $nomeRepresentante = "adsadsad";
        $rua = "dsadsa";
        $cep = "dasdsa";
        $numero = "dasd";
        $bairro ="dasd";
        $complemento = "dasda";
        $cidade = "dasd";
        $uf = "dasdas";
        $email = "dasd";


        $stmt = $conn->prepare("INSERT INTO `parceiros` ( `nomeRepresentante`, `enderecoRua`, `enderecoCep`, `enderecoNumero`, `enderecoBairro`, `enderecoComplemento`, `enderecoCidade`, `enderecoUf`, `email`)  VALUES(:nome, :rua, :cep, :numero, :bairro, :complemento, :cidade, :uf, :email)");
        $stmt->execute(array(
            ':nome' => $nomeRepresentante,
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

    echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

