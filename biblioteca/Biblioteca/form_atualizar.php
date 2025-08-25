<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
<?php  
        include_once  'pedaco.php';

        $id = $_GET['id'];    
        //echo "Valor do ID:" . $id;

        include_once 'conexao.php'
    ?>
    <h2>Formulário para Atualizaçaõ de Livro</h2>
    <div class="container">
        <form action="inserir.php" method="POST">
        
        
        <?php
            $sql = "SELECT * FROM livros WHERE id = $id";
            $stmt = $pdo->query($sql);
            while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {

                echo "Titulo: " . $livros['titulo'] . "<br>";
                echo "Genero:" .$livros['genero'] . "<br>";
                echo "Autor: " . $livros['autor'] . "<br>";
                echo "Ano: " . $livros['ano'] . "<br>";
                echo "Paginas: " . $livros['paginas'] . "<br><br>";
            }
        ?>
        
        
        
        
        
        
        
        
        
       
        <div class="mb-3">
            <input  type="text" class="form-control" name="titulo">
        </div>
        <div class="mb-3">
            <input  type="text" class="form-control" name="genero" >
        </div>
        <div class="mb-3">
            <input  type="text" class="form-control" name="autor">
        </div>
        <div class="mb-3">
            <input  type="text" class="form-control" name="ano">
        </div>
        <div class="mb-3">
            <input  type="text" class="form-control" name="paginas">
        </div>
        
  <a href="index.php" type="button" class="btn btn-primary">voltar</a>

<button type="submit" class="btn btn-primary">Atualizar</button>
  
  
</form>




    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>