<div class="slider">
  <div class="slider--controls" style="height: 600px">
    <div class="slider--control" onclick="goPrev()"><img src="./images/setaEsquerda.png" width="50px"></div>
    <div class="slider--control" onclick="goNext()"><img src="./images/setaDireita.png" width="50px"></div>
  </div>
  <div class="slider--width" style="width: calc(100vw * 2)">
    <div class="slider--item" style="background-image: url('./images/banner1.png');"></div>
    <div class="slider--item" style="background-image: url('./images/banner2.png');"></div>
  </div>
  <h1 class="h1s">Alguns Pratos do Nosso Cardápio</h1>
  <p>Mais Pedidos da Semana</p>
  <div class="produtos">
    <?php
    foreach ($listaProdutos as $produto) :
    ?>
      <div class="marmitas">
        <a id="product" href="index.php?p=produto&details&id=<?= $produto['id'] ?>">
          <img src="<?= $produto['imagem'] ?>" style="width:200px; border-radius: 10%;">
          <p><?= $produto['nome'] ?></p>
          <p id="valor"><?= BRL($produto['valor']) ?></p>
        </a>
      </div>
    <?php
    endforeach; ?>
  </div>
</div>