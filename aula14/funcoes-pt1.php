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
        /**function soma ($a, $b) {
          return $a + $b;
        }

        $x = 2;
        $y = 2;
        $res = soma ($x, $y);
        echo "A soma entre $x e $y é igual a: $res";**/

        function soma () {
          $p = func_get_args();
          $qtdp = func_num_args();
          $s = 0;
          for ($i = 0; $i < $qtdp; $i++) {
            $s += $p[$i];
          }
          return $s;
        }

        $res = soma (3, 5, 2, 6, 9, 1, 4, 0, 5);
        echo "A soma dos valores é $res.";
      ?>
    </div>
  </body>
</html>
