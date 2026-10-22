<?php

$temperatura = 20;

const LIMIT_FRED = 15;
const LIMIT_CALOR = 25;

if ($temperatura < LIMIT_FRED) {
    echo "Fa fred";
} elseif ($temperatura <= LIMIT_CALOR) {
    echo "La temperatura és agradable";
} else {
    echo "Fa calor";
}

?>