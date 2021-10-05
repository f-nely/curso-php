<?php

$pessoas = [
  'James Holden' => 32,
  'Taylor Otwell' => 31
];
?>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

