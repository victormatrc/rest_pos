<?php

namespace App\Lib\Model;


class Usuario
{
    public function getList()
    {
        $usuarios = array(
            array(
                'nome' => 'Paulo',
                'idade' => '25',
            ),
            array(
                'nome' => 'Vitor',
                'idade' => '21',
            ),
            array(
                'nome' => 'Ciclando',
                'idade' => '22',
            ),
            array(
                'nome' => 'Rhanyelasod',
                'idade' => '26',
            ),
            array(
                'nome' => 'Fulano',
                'idade' => '19',
            ),
            array(
                'nome' => 'Beltrano',
                'idade' => '34',
            ),
        );

        return $usuarios;
    }
}