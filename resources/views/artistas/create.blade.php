@extends('layouts.app')

@section('title','Registrando artistas')
@section('content')
<form class=form-group" method="POST" action="/artistas" enctype="multipart/form-data">
	
	@csrf

	
	<div class="form-group">
 <label for="">Nombre</label>	
 <input type="texr" name="name" class="form-control">
</div>  
<div class="form-group">
 <label for="">genero</label>	
 <input type="texr" name="genero" class="form-control">
</div>  
<div class="form-group">
 <label for="">avatar</label>	
 <input type="file" name="avatar" >
</div> 

<button type="submit" class="btn btn-primary">Guardar</button>


</form>

@endsection

