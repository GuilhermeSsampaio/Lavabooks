<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
class VerController extends Controller
{
    public function show($id)
{
     $livro = Livro::find($id);

     return view('site.ver')->with('livro', $livro);


}
}
