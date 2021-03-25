<?php

function welcome($index)
{
    if (isset($_SESSION[$index])) {
        return $_SESSION[$index]->firstName . ' '.$_SESSION[$index]->lastName . ' | <a href="/login/destroy">Logout</a>' ;
    }
    return 'Visitante';
}
