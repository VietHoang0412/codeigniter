<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class login extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
    }
   
 
}
