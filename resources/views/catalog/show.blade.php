@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
        <img src="{{$pelicula->poster}}"/>
        </div>
        <div class="col-sm-8">
            <div>
                <h1 class="Title">{{$pelicula->title}}</h1>
                <h4>Año: {{$pelicula->year}}</h2>
                <h4>Director: {{$pelicula->director}}</h4><br>
                <p>Synopsis: {{$pelicula->synopsis}}</p>
                @if ($pelicula->rented)
                    <h4>Estado: actualmente alquilada</h4>
                    <a href="#" class="btn btn-danger">Devolver Pelicula</a>
                @else
                    <h4>Estado: Pelicula disponible</h4>
                    <a href="#" class="btn btn-primary">Alquilar Pelicula</a>
                @endif
                <a href="{{ url('/catalog/edit/' . $pelicula->id) }}" class="btn btn-warning">
                    <span>
                        <img src="{{ url('assets/bootstrap/bootstrap-icons/pencil.svg') }}">
                    </span>Editar pelicula
                </a>

                <a href="{{ url('/catalog') }}" class="btn btn-light">
                <span>
                        <img src="{{ url('assets/bootstrap/bootstrap-icons/chevron-compact-left.svg') }}">
                </span>Volver al listado</a>
            </div>
        
        </div>
    </div>
@stop