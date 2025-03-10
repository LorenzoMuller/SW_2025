<?php

 $log = $_POST ['login'];
 $sen = $_POST ['senha'];

 if ($log === "etec" and $sen === "informática") {
    echo "<h1>Logado com sucesso!</h1>";
} else {
    echo "<h1>Login ou senha incorretos!</h1>";
}



?>