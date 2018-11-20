@extends('layouts.app')

@section('title','Registrando artistas')
@section('content')
<form class=form-group" method="POST" action="{{ route('artistas.create') }}" enctype="multipart/form-data">
	
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
<div class="form-group">
 <label for="">descripcion</label>	
 <textarea type="texr" rows="4" cols="50" name="descripcion" class="form-control"></textarea>
 
 

</div> 

<button type="submit" class="btn btn-primary">Guardar</button>


</form>

@endsection

