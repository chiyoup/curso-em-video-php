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
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ".number_format($preco,2,",",".");

        $preco += $preco*10/100;
        echo "<br/>O produto solicitado teve alta de 10%.<br/>
        Seu novo valor é: R$ ".number_format($preco,2,",",".");

        $preco = $_GET["p"];
        echo "<br/><br/>O preço do produto é R$ ".number_format($preco,2,",",".");

        $preco -= $preco*10/100;
        echo "<br/>O produto solicitado está com desconto de 10%.<br/>
        Seu novo valor é: R$ ".number_format($preco,2,",",".");

        //Como fazer comentários em PHP
        #Assim também é válido!
        /*Caso você precise escrever um texto,
        use este daqui KKK'
        */

        /* Referenciando Variaveis: O valor da variavel primaria também muda.
          $a = 3;
          $b = &$a;
          $b += 5 ;
          echo $a;
          echo $b;
        */

        #Variáveis de variáveis são como objetos dentro de objetos.
        $kpop = "BTS";
        $$kpop = "The Most Beautiful Moment in Life pt.2";
        echo "<br/><br/>O produto selecionado foi: $kpop - ".$BTS;
      ?>
    </div>
  </body>
</html>
