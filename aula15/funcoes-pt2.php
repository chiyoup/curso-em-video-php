<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
  </head>
  <body>
    <div>
      <?php
        /**function soma ($x) {
          $x += 2;
          echo "Variavel x: $x";
        }

        $a = 3;
        soma ($a);
        echo "<br/>Variavel a: $a";
        echo "<br/>Na passagem por valor, o conteudo da variavel passada como parametro não se altera.";**/

        function soma (&$x) {
          $x += 2;
          echo "Variavel x: $x";
        }

        $a = 3;
        soma ($a);
        echo "<br/>Variavel a: $a";
        echo "<br/>Na passagem por referencia, o conteudo da variavel passada como parametro tambem é alterado.";
      ?>
    </div>
  </body>
</html>
