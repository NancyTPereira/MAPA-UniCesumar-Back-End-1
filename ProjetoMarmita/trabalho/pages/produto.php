<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $idProduto = $_GET["id"];
} else {
  return 0;
}
$produtoSelecionado = current(array_filter($listaProdutos, function ($value) use ($idProduto) {
  return $value["id"] == $idProduto;
}));
?>

<div class="produto">
  <div class="marmita">
    <h1 class="h1s"><?= $produtoSelecionado['nome'] ?></h1><br>
    <p id="valor"><?= BRL($produtoSelecionado['valor']) ?></p><br>
    <p>Tipo: <?= $produtoSelecionado['tipo'] ?></p><br>
    <p>Peso: <?= $produtoSelecionado['peso'] ?></p><br>
    <p><?= $produtoSelecionado['descricao'] ?></p>
  </div>
  <div class="marmita-imagem">
    <img src="<?= $produtoSelecionado['imagem'] ?>" style="height:550px; border-radius: 10%;">
  </div>
</div>