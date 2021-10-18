<?php
$texto = <<<'EOT'
                Esto es un texto, y además tiene signos de puntuación.
                La segunda frase; tiene un punto y coma.
                EOT;

$tok = strtok($texto, " \n,;.");

while ($tok !== false) {
    echo "$tok ";
    $tok = strtok(" \n,;.");
}
        
      