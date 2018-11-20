@extends('layouts.app2')

@section('title','busqueda')
@section('content')

<form class=form-group" method="POST" action="{{route('buscar')}}" enctype="multipart/form-data">
	
	@csrf

	
	<div class="form-group">
 <label for="">busca tu musica</label>	
 <input type="texr" name="busqueda" class="form-control">
</div>  
<button type="submit" class="btn btn-primary">Buscar</button>
</form>
@endsection