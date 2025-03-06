<?php
 
  $nome =$_GET['cxnome'];
  $nota = $_GET['cxnota1'];
  $nota2 = $_GET['cxnota2'];
  $nota3 = $_GET['cxnota3'];
  $media = ( $nota +  $nota2 +  $nota3)/3;

   echo "Nome Digitado: $nome <br>";
   echo "Primeira Nota: $nota <br>";
   echo "Segunda Nota: $nota2 <br>";
   echo "Terceira Nota: $nota3 <br>";
   echo "Sua Média é: $media"
 
  ?>