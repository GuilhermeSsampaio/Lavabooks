@extends('site.layouts.basico')

@section('titulo', 'Inserir')

@section('menu')
<div>
    @section('botao', 'Salvar')
    @section('operacao', 'Insira')
  @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
    @include('site.layouts._partials.form')
</div>
@endsection
