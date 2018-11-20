@extends('layouts.app')

@section('title','artistas')
@section('content')

<div class="row">
	@foreach($artistas as $artistas)
	<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top: 60px;">
 <img style="height: 100px; width: 100px; background-color: blue; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$artistas->avatar}}" alt="">
  <div class="card-body">
    <h5 class="card-title">{{ $artistas->name }}</h5>
    <p class="card-text">{{$artistas->descripcion}}</p>
    <a href="/artistas/{{ $artistas->id}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection