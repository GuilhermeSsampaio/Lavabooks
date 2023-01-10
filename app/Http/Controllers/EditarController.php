<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarController extends Controller
{
    public function editar(){
        return view('/site.editar');
    }
}
