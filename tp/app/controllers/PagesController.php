<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }
    
    /**
     * Show the login page.
     */
    public function loginView()
    {
        return view('login');
    }
    
    
    /* Show the login page.*/
    
    public function presupuesto()
    {
        return view('presupuesto');
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
}
