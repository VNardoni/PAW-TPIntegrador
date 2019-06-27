<?php

namespace App\Models;

use App\Core\Model;

class Pages extends Model
{
    protected $table = 'usuarios';
protected $tableEventos='eventos';
protected $tablePresupuesto='presupuesto';
         
public function getEventos(){
    
    $evento = $this->db->getEventos($this->tableEventos);
    var_dump($evento);
    $misEventos = json_decode(json_encode($evento), True);
    return $misEventos;
}
public function getPresupuestos(){
 
    $presupuestos= $this->db->selectAll($this->tablePresupuesto);
  
    $misPresupuestos = json_decode(json_encode($presupuestos), True);
    return $misPresupuestos;
}
}