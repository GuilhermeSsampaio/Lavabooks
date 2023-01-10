<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InserirController extends Controller
{
    public function inserir(){
        return view('/site.inserir');
    }
}
