@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div align="center" class="container">
            <img src="https://images.vexels.com/media/users/3/137009/isolated/preview/a6bc59dd3d2c02e80c45e6eb64b439d5-logo-de-la-tienda-de-juguetes-by-vexels.png" alt="" width="250">
        </div>
        <div class="container" align="center">
            <a href="{{ url('/create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registrar Juguete</a>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Listar Juguetes</a>
        </div>
        </div>
    </div>
</div>
@endsection
