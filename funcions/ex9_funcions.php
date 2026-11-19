<?php
function sanititzar(string $text): string
{
    return nl2br(htmlspecialchars(trim($text), ENT_QUOTES, "UTF-8"));
}