@extends('layouts.admin')

@section('content')

@foreach ($noticias as $noticia)
<div class="card mx-auto p-2" style="width: 50rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">{{$noticia->contenido}}</p>
    @if(Auth::user()->id==$noticia->id_escritora)
    <form action="{{ route('admin.noticias.destroy', $noticia) }}" id="delete_form" method="POST" onsubmit="return confirm('¿Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-danger" type="submit">
        <i class="fa fa-fw fa-trash"></i>
    </button>
  </form>
  @endif
  </div>
</div>
@endforeach

@endsection