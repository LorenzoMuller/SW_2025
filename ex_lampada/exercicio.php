<?php
   include_once 'class.php';

   $lamp1 = new Lampada ();

   $lamp1 ->Fabricante ="OSRAM";
   $lamp1 ->Tensao = 110;
   $lamp1 ->Potencia = 50;
   $lamp1 ->Cor ="Branca";

   $lamp1 -> MostrarDados();

   echo"<hr>";

   $lamp1->Ligar();
   $lamp1->MostrarDados();
?>