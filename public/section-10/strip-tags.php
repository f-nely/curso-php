<?php

$testoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $testoHtml;

$salvarTextoBanco = strip_tags($testoHtml);

echo $salvarTextoBanco;