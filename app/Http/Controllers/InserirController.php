<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class InserirController extends Controller

{

    public function create(){
        return view('site.inserir');
    }

    public function inserir(Request $request){

        // $this->validate($request,[
        //     'livro'=> 'required',
        //     'ISBN'=> 'required',
        //     'paginas'=> 'required',
        //     'autor'=>'required',
        //     'sinopse'=> 'required'
        // ]);
        // dd($request);
        $livro = new Livro();
        $livro->livro = $request->input('nome');
        $livro->ISBN = $request->input('ISBN');
        $livro->paginas = $request->input('paginas');
        $livro->autor = $request->input('autor');
        $livro->sinopse = $request->input('sinopse');


       // print_r($livro->getAttributes());
        $livro->save();
        // $livro = Livro::all();
        $livros = Livro::all();
        return view('home')->with('livros', $livros)->with('msg', 'livro cadastrado!');
    }
}
