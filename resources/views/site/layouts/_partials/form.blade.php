<div class="d-flex justify-content-center container" >
    <form action={{route('site.inserir')}} method='post'>
        @csrf
        <label class='form-label'>@yield('operacao') seu livro</label>
        <div>
            <input name='nome' type='text' placeholder='Nome do livro'>
        </div>
        <br>
        <div>
            <input name='ISBN' type='text' placeholder='ISBN'>
        </div>
        <br>
        <div>
            <input name='paginas' type='number' placeholder='Número de páginas'>
        </div>
        <br>
        <div>
            <input name='autor' type='text' placeholder='Autor'>
        </div>
        <br>
        <textarea name='sinopse'>Sinopse do livro</textarea>
        <br>
        <button type='submit' class='btn btn-success mt-2'>@yield('botao')</button>
    </form>
