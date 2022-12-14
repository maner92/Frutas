@extends('layout')
@section('contenido')
                    <div class="col-md-8">
                        <h1>Frutitas Registro</h1>
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Temporada</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultaFrutas as $frutas)
                                    <tr>
                                        <td>{{$frutas -> nombre}}</td>
                                        <td>{{$frutas -> temporada}}</td>
                                        <td>{{$frutas -> precio}}</td>
                                        <td>{{$frutas -> stock}}</td>
                                        <td>
                                            <a href="{{route('fruta.edit',$frutas->idFru)}}" class="btn btn-outline-warning">Editar <i class="bi bi-pencil"></i></a>
                                            <a href="{{route('fruta.confirm',$frutas->idFru)}}" class="btn btn-outline-danger">Eliminar <i class="bi bi-pencil"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
@endsection