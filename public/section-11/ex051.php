<?php

$ranking = [
  'Roger' => 200,
  'John' => 54,
  'Iracema' => 444,
  'Diana' => 239
];

arsort($ranking);
?>

<h1>Ranking</h1>

<ol>
  <?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> -> <?= $pontuacao  ?> pontos</li>
    <?php endforeach?>
</ol>