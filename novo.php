<?php

require("Produto.class.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$novoProduto = new Produto("Nome", 12569, 59.56, "Descrição");

var_dump($novoProduto);

?>

</body>
</html>