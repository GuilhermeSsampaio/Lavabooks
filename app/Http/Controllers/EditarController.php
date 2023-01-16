<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class EditarController extends Controller
{
    public function update(Request $request, $id){

        $livro = Livro::find($id);

        $livro->livro = $request->input('nome');
        $livro->ISBN = $request->input('ISBN');
        $livro->paginas = $request->input('paginas');
        $livro->autor = $request->input('autor');
        $livro->sinopse = $request->input('sinopse');
         print_r($livro->getAttributes());
        $livro->save();
        return view('site.editar')->with('livro', $livro);
        }

}

