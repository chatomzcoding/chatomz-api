<?php 

function chatomzToken()
{
    $token = '$2y$10$cOJgOSPlR/O26HfYFuJXAetgXB7E3N9esFiNwiZzEdkkHuzoh1dlS';
    return $token;
}

function cekToken($getToken)
{
    $chatomztoken   = chatomzToken();
    $result = ($chatomztoken === $getToken) ? TRUE : FALSE ;
    
    return $result;
}