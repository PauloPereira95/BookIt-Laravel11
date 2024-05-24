<form action="{{ route('library.store') }}" method="post">
    @csrf
<input type="text" name='name'>
<input type="text" name='address'>
<button type="submit">Enviar</button>
</form>
