@extends('layouts.app')
@extends('site.layouts.basico')
@section('titulo', 'Home')

@section('content')
@section('menu')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='m-5 container'>
    @if(isset($msg))
        <div class="card w-75 mb-3 d-flex justify-content-center container">
            <p class='m-2 alert alert-success'>{{$msg}}</p>

        @endif
    <h1>Lavabooks - catalogo de livros digital</h1>
    <p>Livros Cadastrados: {{ $livros->count() }}</p>


     </div>
</div>
@foreach ($livros as $l )
<div class="card w-75 mb-3 d-flex justify-content-center container">
    <div class="card-body">
        <h5 class="card-title">{{$l->livro}}</h5>
        <p class="card-text">{{$l->autor}}</p>
        <p class="card-text">{{$l->sinopse}}</p>
        <a href="/ver/{{$l->id}}" class="btn btn-primary">Ver mais</a>
        <a href="/editar/{{$l->id}}" class="btn btn-primary">Editar</a>
        <a href="/deletar/{{$l->id}}" class="btn btn-primary">Deletar</a>

    </div>
</div>

@endforeach
@endsection
@endsection
