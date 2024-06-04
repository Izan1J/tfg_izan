@extends('layouts.admin')

@section('content')
<div class="card mx-auto p-2" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Contenido de la noticia</p>
  </div>
</div>
@if(!$noticias)
<p>no hay nada</p>
@endif
@foreach ($noticias as $noticia)

@endforeach

@endsection