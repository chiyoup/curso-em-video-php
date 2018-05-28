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
        $bts = array("Run","Go Go","Fake Love");
        $bts[] = "Fantastic Baby"; #ou array_push($bts,"Fantastic Baby");
        var_dump($bts);
        unset($bts[3]);
        var_dump($bts);

        #array_pop(); = Elimina o ultimo elemento do array.
        #array_unshift(); = Adiciona um elemento no inicio do array, e reorganiza os indices.
        #array_shift(); = Elimina o primeiro elemento do array, e reorganiza os indices.
        #sort(); = Organiza o array. Ex: 8,6,5,4 -> 4,5,6,8.
        #rsort(); = Organiza o array de maneira decrescente. Ex: 0,4,7,5,1,9 -> 9,7,5,4,1,0.
        #asort(); = Organiza da mesma forma que o sort(), mas conserva o valor do indice.
        #ksort(); = Organiza o array de acordo com os indices.
        #krsort();= Organiza o array por indices de forma decrescente.
      ?>
    </div>
  </body>
</html>
