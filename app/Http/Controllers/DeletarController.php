<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
class DeletarController extends Controller
{
    public function deletar($id){
        $livro = Livro::find($id);

        // $livro->delete();

        $livros = Livro::all();
        return view('home')->with('livros', $livros);
    }
}
