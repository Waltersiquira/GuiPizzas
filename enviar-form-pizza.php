<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiPizzas</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $nn = $_POST['nome'];
    $dd = $_POST['descricao'];
    $p = $_POST['preco'];
    $i = $_POST['imagem'];
    $n = $l->real_escape_string($nn);
    $d = $l->real_escape_string($dd);
    if ($l->query("INSERT INTO `pizza` (`id`, `nome`, `descrição`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$d', '$p', '$i')") == true){
        echo 'Pizza adcionada com sucesso';
    } else {
        echo "erro ao inserir dados";
    }
    ?>
</body>
</html>