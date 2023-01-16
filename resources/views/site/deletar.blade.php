@extends('site.layouts.basico')

@section('titulo', 'Deletar')
@section('menu')

{{-- <div class="d-flex justify-content-center container" >

    <form action={{route('site.inserir')}} method='post'>
        @csrf
        <label class='form-label'>Insira o nome ou ISBN do livro que deseja excluir</label>
        <div>
            <input name='nome' type='text' placeholder='Nome do livro'>
        </div>
        <br>
        <div>
            <input name='ISBN' type='text' placeholder='ISBN'>
        </div>
            <a href="/deletar" class="btn btn-primary">Deletar</a>
    </form>

</div> --}}
@endsection
