<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $ban_cartao = $_POST['ban_cartao'];

    echo "<h3>Dados Informados:</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
    echo "<p><strong>Bandeira do Cartão de Crédito:</strong> $ban_cartao</p>";
?>