@extends('layouts.admin')

@section('content')
<h1 class="text-center">¡El registro se ha completado correctamente!</h1>
<h4 class="text-center">Entregue la siguiente documentacion en nuestra oficina para completar la inscripcion:</h4>
<div class="text-center">
  <ul class="list-unstyled">
    <li class="">Fotocopia SIP</li>
    <li class="">Hoja libro de vacunas</li>
    <li class="">Fotocopias DNI padres o tutores</li>
    <li class="">Volante de empadronamiento</li>
    <li class="">Declaracion de la renta del año 2022</li>
    <li class="">Libro de familiar</li>
  </ul>
</div>
<div class="text-center">
  <p>¿Quiere que cuidemos de algun hijo suyo más?</p>
  <a href="{{ route('admin.alumnos.create') }}" class="btn bg-pink">
    <p>
        Nueva Inscripcion
    </p>
</a>
</div>


@endsection