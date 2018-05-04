<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <?php
      $texto = $_POST["t"];
      $tamanho = $_POST["tam"];
      $cor = $_POST["cor"];
    ?>
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
    <style media="screen">
      body {
        text-align: center;
        white-space: pre-wrap;
      }

      span.texto {
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
      }
    </style>
  </head>
  <body>
    <div>

      <?php
        echo "<span class='texto'>$texto</span>";
      ?>

      <a href="cores.html">Voltar</a>
    </div>
  </body>
</html>
