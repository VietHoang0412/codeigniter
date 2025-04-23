<?php

namespace App\Service;

class BaseService
{
    public $validation;
    function __construct(){
        $this -> validation = \Config\Services::validation();
    }
}