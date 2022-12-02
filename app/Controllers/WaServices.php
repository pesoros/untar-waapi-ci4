<?php

namespace App\Controllers;

class WaServices extends BaseController
{
    public function index()
    {
        $data = [];
        $result['status'] = 200;
        $result['messages'] = 'success';
        $result['data'] = $data;
        return $this->response->setJSON($result); 
    }
}
