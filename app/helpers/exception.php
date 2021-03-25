<?php

function formatException(Throwable $throw)
{
    var_dump("Erro no arquivo <b>{$throw->getFile()}</b> na linha <b>{$throw->getLine()}</b>, com a mensagem: <b><i>{$throw->getMessage()}</i></b>...SE EXTIVER FAZENDO ALGUMA INTEGRAÇÃO COM O BANCO DE DADOS VERIFIQUE SE O NÚMERO DE CAMPOS PASSADOS EM getAttributes() REALMENTE SEJAM OS CAMPOS QUE A QUERYE STÁ PEDINDO");
}
