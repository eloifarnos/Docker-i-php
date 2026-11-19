<?php
function emailValid(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}