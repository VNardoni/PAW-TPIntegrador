<?php

namespace App\Controllers;
use App\Models\pages;
class PagesController
{
    public function __construct(){
        $this->model = new Pages();
        } 
     /* Show the home page.
     */
    public function home()
    { 
        if(empty($_SESSION)){
        
            return view('index');
        } else {
           
        $datos['userLogueado'] = $_SESSION['user'];
      
        
            return view ('index',compact('datos'));
        
    }
    }
    /**
     * Show the login page.
     */
    public function loginView()
    {$datos['userLogueado'] = $_SESSION['user'];
     
     return view('login',compact('datos'));
    }
    
    
    /* Show the login page.*/
    
    public function presupuesto()
    {
        $todosEventos=$this->model->getEventos();
         $datos["diaHoy"] = date("Y-m-d");
        //$datos["userLogueado"] = $_SESION['user'];
        
        return view('presupuesto',compact('todosEventos'));
    }
    
    /* Show the login page.*/
    
    public function galeria()
    {
        return view('galeria');
    }
    
    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
  public function cerrarSesion(){
        session_unset();
        session_destroy();
        redirect('');
    }
public function vistaRegister(){
     
    return view('register');
}
    
    
public function  vistaAdmin(){
    $todosPresupuestos=$this->model->getPresupuestos();
    return view ('solicitudes',compact('todosPresupuestos'));
}

}
        