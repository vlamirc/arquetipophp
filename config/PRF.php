<?php

/*
Para chamar qualquer um desses atributos em qualquer lugar da aplicação use: Config::get("PRF.nomeAtributo")
    Exemplo: Config::get("PRF.nomeCurto"); retornará o nome curto definido abaixo
*/

return [
    "nomeSistema" => "NOVO SISTEMA PRF", // Nome que aparece em algumas partes do sistema
    "nomeCurto" => "NOVO SISTEMA", // Nome que aparece no cabeçalho do sistema
    "siglaSistema" => "novo_sistema", // Sigla do sistema cadastrado no DPRFSeguranca
    "versao" => "Alpha 1", // Versão do sistema
    "producao" => env('PRF_PRODUCAO'), // false se o sistema estiver em modo homologação; true para produção. Variável setada no arquivo .env
];