<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
  </head>
  <body>
    <div>
      <form method="post" action="tabuada-response.php">
        <select name="num">
          <?php
            for ($c = 1; $c<=10; $c++) {
              echo "<option>$c</option>";
            }
          ?>
        </select>
        <input type="submit" value="Tabuada"/>
      </form>
    </div>
  </body>
</html>
