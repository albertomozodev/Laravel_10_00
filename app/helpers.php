<?php
function setActive($routeName)
{
    return  request()->routeIs($routeName) ? 'active' : '' ;
}
function setParImpar($fila) {
    if ($fila) { return 'impar';} else {return 'par';}
}

