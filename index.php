<?php
$texto = <<<'EOT'
                Esto es un texto, y 0 además tiene signos de puntuación.
                La segunda frase; tiene un punto y coma.
                EOT;

$tok = strtok($texto, " \n,;.");

while ($tok !== false) {
    echo "$tok ";
    $tok = strtok(" \n,;.");
}
 

if (true === 'cadena') {echo "tengo razón";}
      