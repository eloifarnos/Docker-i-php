<?php

$nota = 6.5;
const NOTA_APROVAT = 5;

echo "La teva nota és $nota. ";

if ($nota >= NOTA_APROVAT) {
    echo "Has aprovat";
} else {
    echo "Has suspès";
}

?>