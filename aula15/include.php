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
        include "funcoes-include.php";
        /**Ao usar o "include" se houver algum erro no arquivo importado, o programa informa o erro,
        e continua executando o codigo.

        Ao usar "required" se houver algum erro no arquivo importado, o programa informa o erro,
        e cancela a execução do codigo.

        Usar "include_once" e "required_once" evita que as funcoes sejam importadas mais de uma vez...
        O "include_once/required_once" vai fazer uma "varredura" no código e impedir que a mesma função
        seja importada mais de uma vez**/
        echo "<h1>Testando novas funções:</h1>";
        ola();
        mostraValor(4);
      ?>
    </div>
  </body>
</html>
