<?php
function phone_format($phone)
{
    return "tel:+33" . substr(str_replace(" ", "", $phone), 1, strlen(str_replace(" ", "", $phone)));
}