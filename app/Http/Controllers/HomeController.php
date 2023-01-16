<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class HomeController extends Controller
{
    public $objLivro;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        //$this->objLivro=new Livro();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $livros = Livro::all();
        return view('home')->with('livros', $livros);


    }
    public function home(){
    //  $livros = Livro::all();
    //    return view('home')->with('livros', $livros);

    }
    // public function ver($id){
    //     $livro = Livro::findOrFail($id);
    //     return view('ver')->with('livros', $livro);
    // }
}
