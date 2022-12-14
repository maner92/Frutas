@extends('layout')
@section('contenido')

@if(session()->has('confirmacion'))
{!! "<script>
    Swal.fire('Listo', 'Tu recuerdo llegó al controlador', 'success')
</script>" !!}
<div class="alert alert-primary alert-dimissible fade show thetx-center" role="alert">
    <strong>
        {{session('confirmacion')}}
    </strong>
    <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
</div>
@endif

<h1 class="mt-4 display-1 text-center">Editar Fruta</h1>

<br>
<div>
    <div>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dimissiible fade show text-center" role="alert">
            <strong>Formulario Incompleto</strong> {{$error}}
            <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
        </div>
        @endforeach
        @endif

        <div class="text-center">Correciones a mis recuerdos<i class="bi bi-wechat"></i></div>

        <div class="card">
            <div class="container">
            <form action="{{route('fruta.update',$frutaid->idFru)}}" method="post">
                @csrf
                {!!method_field('PUT')!!}
                <div>
                    <label for="" class="form-label" name="labelNombre">Nombre: </label>
                    <input type="text" name="txtNombre" value="{{$frutaid->nombre}}" class="form-control form-control-sm" type="text">
                    <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
                </div>
                <div>
                    <label for="" class="form-label" name="labelPrecio">Precio: </label>
                    <input type="text" name="txtPrecio" value="{{$frutaid->precio}}" class="form-control form-control-sm" type="text">
                    <p class="fw-bold text-danger">{{$errors->first('txtPrecio')}}</p>
                </div>
                <div>
                    <label for="" class="form-label" name="labelTemporada">Temporada: </label>
                    <input type="text" name="txtTemporada" value="{{$frutaid->temporada}}" class="form-control form-control-sm" type="text">
                    <p class="fw-bold text-danger">{{$errors->first('txtTemporada')}}</p>
                </div>
                <div>
                    <label for="" class="form-label" name="labelStock">Stock </label>
                    <input type="text" name="txtStock" value="{{$frutaid->stock}}" class="form-control form-control-sm" type="text">
                    <p class="fw-bold text-danger">{{$errors->first('txtStock')}}</p>
                </div>

                <button type="submit" class="btn btn-primary" name="btnActualizar">Actualizar Fruta</button>
            </form>
        </div>
        </div>
    </div>
</div>
</div>
@stop