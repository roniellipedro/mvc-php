<?php

namespace App\Models;

class Usuario
{
    public function getUserData()
    {
        return [
            'nome' => 'Gabriel',
            'idade' => 17,
            'email' => 'gabriel@gabriel.com'
        ];
    }
}
