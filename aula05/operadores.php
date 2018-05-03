<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações Aritméticas</title>
  </head>
  <body>

    <div>

      <?php
        $n1 = 3;
        $n2 = 2;

        echo "<h3>Valores recebidos: $n1 e $n2</h3>";
        echo "A soma é igual a: ".($n1 + $n2);
        echo "<br/>A subtração é igual a: ".($n1 - $n2);
        echo "<br/>A multiplicação é igual a: ".($n1 * $n2);
        echo "<br/>A divisão é igual a: ".($n1 / $n2);
        echo "<br/>O resto é igual a: ".($n1 % $n2);
        echo "<br/>A média é igual a: ".(($n1 + $n2) / 2);
      ?>
    </div>
  </body>
</html>
