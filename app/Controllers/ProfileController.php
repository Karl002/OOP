<?php
// app/Controllers/ProfileController.php

namespace App\Controllers;
use CodeIgniter\Controller;


class ProfileController extends BaseController
{
    public function index()
    {

        helper(['form']);
        $data = [];
        echo view('profile', $data);
        $session = session();
        echo "Hello  : ".$session->get('name');
        
        
    }
}
