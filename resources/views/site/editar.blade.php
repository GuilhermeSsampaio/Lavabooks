@extends('site.layouts.basico')

@section('titulo', 'Editar')

@section('menu')

<div>
    @section('botao', 'Atualizar')
    @section('operacao', 'Atualize')
<div class="d-flex justify-content-center container" >
    <form method='post' action="{{ route('site.update', $livro->id) }}">
        @csrf
        @method('PUT')
        <label class='form-label'>@yield('operacao') seu livro</label>
        <div>
            <input name='nome' type='text' value='{{$livro->livro}}' placeholder='Nome do livro'>
        </div>
        <br>
        <div>
            <input name='ISBN' type='text' value='{{$livro->ISBN}}' placeholder='ISBN'>
        </div>
        <br>
        <div>
            <input name='paginas' type='number' value='{{$livro->paginas}}' placeholder='Número de páginas'>
        </div>
        <br>
        <div>
            <input name='autor' type='text' placeholder='Autor' value='{{$livro->autor}}'>
        </div>
        <br>
        <textarea name='sinopse'>{{$livro->sinopse}}</textarea>
        <br>
        <button type='submit' class='btn btn-success mt-2'>@yield('botao')</button>
    </form>

</div>
@endsection
