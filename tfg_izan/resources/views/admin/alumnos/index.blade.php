@extends('layouts.admin')

@section('content')
<h1 class="display-1">¡El registro se ha completado correctamente!</h1>
<h4 class="display-4">Entregue la siguiente documentacion en nuestra oficina para completar la inscripcion:</h4>
<ul class="list-group list-group-flush">
    <li class="list-group-item">Fotocopia SIP</li>
    <li class="list-group-item">Hoja libro de vacunas</li>
    <li class="list-group-item">Fotocopias DNI padres o tutores</li>
    <li class="list-group-item">Volante de empadronamiento</li>
    <li class="list-group-item">Declaracion de la renta del año 2022</li>
    <li class="list-group-item">Libro de familiar</li>
  </ul>

  <p>¿Quiere que cuidemos de algun hijo suyo más?</p>
  <a href="{{ route('admin.alumnos.create') }}" class="btn btn-info">
    <p>
        Nueva Inscripcion
    </p>
</a>

@endsection