<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");
?>

<?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

    if(insereProduto($conexao, $nome, $preco)) { ?>
    <p class="text-success">Produto: <?= $nome; ?>, R$<?= $preco ?> adicionado com sucesso!</p>
<?php } else { 
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Produto: <?= $nome; ?> não foi adicionado <?= $msg ?></p>
<?php
}
    mysqli_close($conexao);

?>

<?php include("rodape.php") ?>
