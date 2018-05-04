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
        $nome = $_POST["nome"];
        $data = $_POST["ano"];
        $sexo = $_POST["sexo"];
        $idade = date("Y") - $data;
        echo "$nome tem $idade anos!";
      ?>

      <a href="formulario.html">Voltar</a>
    </div>
  </body>
</html>
