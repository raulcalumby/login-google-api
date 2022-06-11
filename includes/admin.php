<?php

$dados = \App\Session\User::getInfo();
?>
<div class="container d-flex  align-items-center flex-column p-5">
  <h1>Pagina admin</h1>
  <p>Olá, <?= $dados['name'] ?> , você logou com o google </p>
  <img class="img-fluid rounded" src="<?= $dados['image'] ?> " />
  <a href="logout.php" class="p-5">
    <button class="btn btn-success btn-lg">Sair</button>
  </a>
</div>