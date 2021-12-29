<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Clientes extends Controller{

    public function novo()
    {
       echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }

}