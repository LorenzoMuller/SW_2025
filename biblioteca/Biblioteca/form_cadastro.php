<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
<?php  
        include_once  'pedaco.php';
    ?>
    <h2>Formulário para Cadastro de Livro</h2>
    <div class="container">
        <form action="inserir.php" method="POST">
        <div class="mb-3">
            <input placeholder="Digite o titúlo do livro" type="text" class="form-control" name="titulo">
        </div>
        <div class="mb-3">
            <input placeholder="Digite o genero do Livro" type="text" class="form-control" name="genero" >
        </div>
        <div class="mb-3">
            <input placeholder="Digite o autor do Livro" type="text" class="form-control" name="autor">
        </div>
        <div class="mb-3">
            <input placeholder="Digite o ano de lançamento do Livro" type="text" class="form-control" name="ano">
        </div>
        <div class="mb-3">
            <input placeholder="Digite a quantidade de páginas do Livro" type="text" class="form-control" name="paginas">
        </div>
        
  <a href="index.php" type="button" class="btn btn-primary">Voltar</a>

<button type="submit" class="btn btn-primary">Cadastrar</button>
  
  
</form>




    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>