<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['webservices'] = 'UNTAR API';
        return $this->response->setJSON($data); 
    }
}
