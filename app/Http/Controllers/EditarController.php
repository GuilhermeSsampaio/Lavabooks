<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class EditarController extends Controller
{
    public function edit($id){
        $livro = Livro::find($id);

          print_r($livro->getAttributes());
        return view('site.editar')->with('livro', $livro);
    }

    public function update(Request $request, $id){

        $livro = Livro::find($id);

        $livro->livro = $request->input('nome');
        $livro->ISBN = $request->input('ISBN');
        $livro->paginas = $request->input('paginas');
        $livro->autor = $request->input('autor');
        $livro->sinopse = $request->input('sinopse');
         print_r($livro->getAttributes());
        $livro->save();
        $livros = Livro::all();
        return view('home')->with('livros', $livros)->with('livros', $livros)->with('msg', 'livro editado!');
        }

}

