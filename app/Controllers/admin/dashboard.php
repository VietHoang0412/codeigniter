<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class dashboard extends BaseController
{
    public function index(): string
    {
        $data = [];
        $data = $this -> giaodienAdmin($data);
        return view('admin/dashboard',$data);
    }
   
 
}
