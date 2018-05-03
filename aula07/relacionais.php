<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
  </head>
  <body>
    <div>

      <?php
        $numero1 = $_GET["a"];
        $numero2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $numero1 e $numero2";

        $resultado = ($tipo == "s") ? $numero1 + $numero2 : $numero1 - $numero2;
        echo "<br/>O resultado é: $resultado";

        #Testando operadores de igualdade e comparação.
        $c = 3;
        $d = "3";
        $comparacao = ($c === $d) ? "SIM" : "NÃO";
        echo "<br/><br/>A variável 1 ($c) é igual a variável 2 ($d) ( === ) ? $comparacao";
        $igual = ($c == $d) ? "SIM" : "NÃO";
        echo "<br/>A variável 1 ($c) é igual a variável 2 ($d) ( == ) ? $igual";

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        echo "<br/><br/>A média entre $nota1 e $nota2 é: $media";
        echo "<br/>O aluno foi ".(($media > 6) ? "APROVADO" : "REPROVADO");

        $ano = $_GET["ano"];
        $idade = (2018 - $ano);
        echo "<br/><br/>Você tem $idade anos!";
        echo "<br/>Preciso votar ? ".(($idade >= 18 and $idade < 65) ? "SIIIIIM! Você é Obrigadaaa(o)" :
        "Não! Você não é obrigada(o)!");
      ?>
    </div>
  </body>
</html>
