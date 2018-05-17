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
        /*$n = $_POST["num"];
        $o = $_POST["oper"];
        switch ($o) {
          case '1':
            $r = $n * 2;
            break;
          case '2':
            $r = $n ^ 3;
            break;
          case '3':
            $r = sqrt($n);
        }
        echo "O resultado da operação selecionada é: <span class='foco'>$r</span>";*/

        $d = $_POST["ds"];
        switch ($d) {
          case '2':
          case '3':
          case '4':
          case '5':
          case '6':
            echo "Levanta e vai estudar! :)";
            break;
          case '7':
          case '8':
            echo "Descanse, pequeno gafanhoto! ;)";
            break;
          default:
            echo "Dia da semana inválido.";
        }
      ?>
      <!--<a href="estrutura-condicional-switch.html" class="botao">Voltar</a>-->
      <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>
