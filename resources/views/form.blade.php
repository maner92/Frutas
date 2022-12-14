@extends('layout')
@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo', 'Tu recuerdo llegó al controlador', 'success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show thetx-center" role="alert">
        <strong>
            {{session('confirmacion')}}
        </strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif

<h1 class="mt-4 display text-center">Ingresa Fruta</h1>

<br>
<div>
    <div>
        <div class="text-center"><i class="bi bi-wechat"></i>
        </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dimissiible fade show text-center" role="alert">
                <strong>Formulario Incompleto</strong> {{$error}}
                <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
            </div>
            @endforeach
        @endif

        <div class="card">
            <div class="container">
                <form action="{{route('fruta.store')}}" method="post">
                    @csrf
                    <div class="mt-2 form-group">
                        <label for="" class="form-label" name="labelNombre">Nombre: </label>
                        <input type="text" name="txtNombre" value="{{old('txtNombre')}}" class="form-control form-control-sm" type="text">
                        <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
                        @error('labelNombre')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mt-2 form-group">
                        <label for="" class="form-label" name="labelPrecio">Precio: </label>
                        <input type="text" name="txtPrecio" value="{{old('txtPrecio')}}" class="form-control form-control-sm" type="text">
                        <p class="fw-bold text-danger">{{$errors->first('txtPrecio')}}</p>
                        @error('labelPrecio')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mt-2 form-group">
                        <label for="" class="form-label" name="labelTemporada">Temporada: </label>
                        <input type="text" name="txtTemporada" value="{{old('txtTemporada')}}" class="form-control form-control-sm" type="text">
                        <p class="fw-bold text-danger">{{$errors->first('txtTemporada')}}</p>
                        @error('labelTemporada')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mt-2 form-group">
                        <label for="" class="form-label" name="labelStock">Stock: </label>
                        <input type="text" name="txtStock" value="{{old('txtStock')}}" class="form-control form-control-sm" type="text">
                        <p class="fw-bold text-danger">{{$errors->first('txtStock')}}</p>
                        @error('labelStock')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    

                    <button type="submit" class="btn btn-primary mb-2" name="btnGuardar">Guardar recuerdo</button>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
@stop