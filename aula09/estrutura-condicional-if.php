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
        $a = $_POST["ano"];
        $i = date("Y") - $a;
        echo "Você nasceu em $a, e tem $i anos!<br/>";
        if ($i < 16) {
          $voto = "o eleitor não vota.";
        } elseif ($i >= 16 and $i <= 18 or $i > 65) {
            $voto = "o voto é opcional.";
          } else {
              $voto = "o voto é obrigatório.";
            }
        echo "Para esta idade, $voto";
        ?>
    </div>
  </body>
</html>
