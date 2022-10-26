<?php 

function menuAktif($menu,$menuaktif)
{
    $view = ($menu === $menuaktif) ? 'active' : NULL ;
    return $view;
}