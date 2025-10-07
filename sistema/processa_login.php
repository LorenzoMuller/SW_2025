<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    $resultado = $stmt->execute();
    $num_registros = $stmt->rowCount();
    $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
    var_dump($resultado);

    if($num_registros == 0){
        echo "VOCE NÃO TEM PERMISSÃO";
    }else{
        echo "ACESSO PERMITIDO PARA A RESTRITA.PHP";
    }


?>