<?php

namespace App\Models;

use App\Core\Model;

class Users extends Model
{
    protected $table = 'usuarios';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }

    public function insert(array $usuario)
    { echo "llll";
        var_dump($usuario);
        $this->db->insert($this->table, $usuario);
    }

public function buscarUsuario($user){
       //comparo si existe el nombre de usuario 
    var_dump($user);   
    return $this->db->comparaUsuario($this->table,$user);
    }



}
