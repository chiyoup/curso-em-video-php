<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
    <style media="screen">
      body {
        text-align: center;
        white-space: pre-wrap;
      }
    </style>
  </head>
  <body>
    <div>

      <?php
        $valor = $_POST["v"];
        $raiz = sqrt($valor);
        echo "A raiz quadrada de $valor é: ".number_format($raiz,2);
      ?>

      <a href="integracao.html">Voltar</a>
    </div>
  </body>
</html>
