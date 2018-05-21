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
      $v = $_POST["val"];
      echo "<h1>Calculando o fatorial de $v</h1>";
      $c = $v;
      $fat = 1;
      do {
        $fat = $fat * $c;
        $c--;
      } while ($c >= 1);
      echo "<h2>$v ! = $fat</h2> ";
      ?>
      <p><a href="fatorial.html" class="botao">Voltar</a></p>
    </div>
  </body>
</html>
