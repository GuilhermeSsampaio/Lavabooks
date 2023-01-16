@extends('layouts.app')
@extends('site.layouts.basico')
@section('titulo', 'Home')

@section('content')
@section('menu')
    <div class="card w-75 mb-3 d-flex justify-content-center container">
        <div class="card-body">
            <h5 class="card-title">{{$livro->livro}}</h5>

            <a href="/editar/{{$livro->id}}" class="btn btn-primary">Editar</a>
            <a href="/deletar" class="btn btn-primary">Deletar</a>

        </div>
    </div>
@endsection
@endsection
