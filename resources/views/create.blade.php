@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div align="center" class="container">
            <img src="https://images.vexels.com/media/users/3/137009/isolated/preview/a6bc59dd3d2c02e80c45e6eb64b439d5-logo-de-la-tienda-de-juguetes-by-vexels.png" alt="" width="100">
        </div>
        <div align="center" class="container">
            <h1>Ingresar Nueva Referencia de Juguete</h1>
        </div>
        <div class="container">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            @if (session('notification'))
                  <div class="alert alert-success">
                      {{ session('notification') }}
                  </div>
              @endif
            <form method="POST" action="{{ url('/create') }}">
                @csrf
                <div class="form-group">
                    <label for="">Nombre del juguete</label>
                    <input type="text" class="form-control" placeholder="Escriba el nombre del juguete" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="">Descripción</label>
                    <input type="text" class="form-control" placeholder="Escriba la descripción del juguete" name="description" value="{{ old('description') }}">
                </div>

                <div class="form-group">
                    <label for="">Comentarios del Juguete</label>
                    <textarea type="text" class="form-control" placeholder="Escriba los comentarios del juguete" name="comment">{{ old('comment') }}</textarea>
                </div>

                <div class="container" align="center">
                    <button class="btn btn-success btn-lg active">Ingresar</button>
                    <a class="btn btn-warning btn-lg active" href="{{ url('/home') }}">Regresar</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection