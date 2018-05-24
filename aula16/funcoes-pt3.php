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
        /**$produto = "Leite";
        $preco = 4.5;
        printf("O %s custa R$ %.2f", $produto, $preco);**/

        /**printf:
        %d = valor decimal (positivo ou negativo)
        %u = valor decimal sem sinal (apenas positivos)
        %f = valor real
        %f = string
        **/

        /**$arrayBonitao[0] = 4;#Ou: $arrayBonitao = array (4,8,3);
        $arrayBonitao[1] = 8;
        $arrayBonitao[2] = 3;
        print_r($arrayBonitao);**/

        /**var_export($arrayBonitao);
        faz exatamente a mesma coisa que print_r, mas elimina os colchetes,
        e separa os indices por virgula; **/

        #var_dump($arrayBonitao);
        /**mostra o caminho do arquivo, a linha que o código inicia,
        o tamanho do array, além de indicar separadamente a qual posição
        o numero está associado, e o tipo de conteudo (integer, float, string,etc...)**/

        #Mais usado para testes

        $gandhi = "A alegria está na luta, na tentativa, no sofrimento envolvido,
        e não na vitória propriamente dita.";
        $txt = wordwrap($gandhi, 40, "<br/>", false);
        echo $txt;
        /**Mais funções:

        strlen(); = mostra o tamanho da string contando com os espaços.

        trim(); = remove excesso de espaços.

        ltrim(); = remove os espaços do inicio apenas.

        rtrim(); = remove os espaços do final apenas.

        str_word_count(stringaqui, 0); = retorna a quantidade de palavras na string.
        Usar o numero 0, faz com que ele conte a string normalmente,
        se ao invés de 0, eu colocar 1,
        a string vai se transformar em um array, cada palavra em um indice,
        sendo ele iniciado em 0.
        Ja no numero dois, o numero do indice do array será de acordo com a posição
        da palavra dentro da string. ex: a palavra "luta", na frase acima,
        teria o indice 24, e seria composta de "luta, ".

        explode(" ", $variavelaqui); = O explode tambem cria um array
        da mesma maneira que str_word_count na posição 1,
        apens a sintaxe se diferencia um pouco, dentro do parenteres, entre aspas,
        é necessário especificar o criterio de separação da string,
        naquele caso um espaço, ex: "curso em video", criaria um array com três indices,
        sendo o primeiro curso, o segundo em, e o terceiro video.**/

        #str_split(); = Transforma em array, mas coloca cada letra em um indice.

        /**implode("#", $stringaqui); ou join(); = Funciona da mesma maneira que o str_split,
        só que me maneira inversa,
        ao invés de transformar string em array, transforma array em string,
        utilizando tambem de um criterio de separação apenas para formatar.**/

        #chr(); = Retorna o caractere correspondente ao numero (codigo referente a tabela) digitado.

        #ord(); = Faz o contrario da acima. Retorna o codigo referente ao caractere digitado.
      ?>
    </div>
  </body>
</html>
