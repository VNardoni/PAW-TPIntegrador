<?php

namespace App\Controllers;
use App\Models\Presupuesto;
class PresupuestoController
{
    public function __construct(){
        $this->model = new Presupuesto();
         session_start();
    } 


 public function validarPresupuesto(){
       
   
                  
    
        $presupuesto = [
            'mensaje' => $_POST['mensaje'],
            'fechaInicio'=> $_POST['fechaInicio'],
             'fechaFin' => $_POST['fechaFin'],
             'cantidadInvitados'=> $_POST['cantidadInvitados'],
            'estado' =>"pendiente",
          'nombre'=>$_SESSION['user'],
           'nombreEvento'=>$_POST['nombreEvento']
        ];
       //$presupuesto['nombre']=$_SESSION['user'];
        $this->model->guardar($presupuesto);
        return view('index');

    }       


public function vistaPresupuesto(){
    return view('presupuesto');
    
    
}
public function updateEstado(){
    $estado="reservado";
    if (!empty($_GET)) {
        $id=$_GET['idPresupuesto'];}
   
$this->model->actualizarEstado($estado,$id);
$todosPresupuestos=$this->model->getPresupuestos();    
    
    
    return view('solicitudes',compact('todosPresupuestos'));
}

}








