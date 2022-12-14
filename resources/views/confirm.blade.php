@extends('layout')
@section('contenido')

<h1 class="mt-4 display-1 text-center text-white">
    <i class="bi bi-card-checklist"></i>
    Confirmar Eliminación
</h1>

<div class="container col-md-6">
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>¿Seguro que quieres eliminar esta fruta?</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
    </div>

    <div class="card m-5">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i> {{$frutaid->nombre}}</h5>

        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="{{route('fruta.destroy',$frutaid->idFru)}}" method="post">
                    {!!method_field('DELETE')!!}
                    {!!csrf_field()!!}
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
                <a href="{{route('fruta.index')}}" class="btn btn-outline-warning">Cancelar <i class="bi bi-pencil"></i></a>
            </div>
        </div>
    </div>
</div>
@stop 