@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Añade una nueva noticia al tablon</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.noticias.store')}}">
                            @csrf
                            <div class="form-group">
                                <input type="textarea" name="contenido" id="contenido" class="form-control {{$errors->has('contenido') ? 'is-invalid' : ''}}" placeholder="Escriba el contenido de la noticia" value="{{old('contenido', '')}}">
                                @if ($errors->has('contenido'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('contenido') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Publicar
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="profe_id" id="profe_id" value="{{$id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection