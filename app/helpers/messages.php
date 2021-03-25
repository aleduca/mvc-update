<?php

use app\classes\Flash;

function messages($key)
{
    $message = Flash::get($key);

    if (isset($message['message'])) {
        return "<span class='alert alert-{$message["alert"]}'>{$message["message"]}</span>";
    }
}
