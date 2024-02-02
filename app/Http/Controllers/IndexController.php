<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexpost(){
        return "indexpost";
    }
    public function indexget(){
        return "indexget";
    }
    public function installpost(){
        return "install";
    }
}
