<?php

namespace App\Repositories;

class StateRepository
{
    public function get()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/');

        $estados = [];
        foreach (json_decode($res->getBody()->getContents()) as $key => $value) {
            $estados[$key]['sigla'] = $value->sigla;
            $estados[$key]['nome'] = $value->nome;
        }

        return $estados;
    }
}