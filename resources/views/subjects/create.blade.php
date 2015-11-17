<form action="{{ route('subjects.store')}}" method='POST'>
<input type="hidden" name='_token' value={{ csrf_token() }}>
	<label for="title">title</label>
	<input type="text" name='title'>
</form>