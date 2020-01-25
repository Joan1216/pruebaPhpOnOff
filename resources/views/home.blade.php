@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div align="center" class="container">
            <img src="{{ url('/img/toy.png') }}" alt="" width="250">
        </div>
        <h2 align="center">Bienvenido - Inventario Toys Shop</h2><hr>
        <div class="container" align="center">
            <a href="{{ url('/create') }}" role="button" aria-pressed="true">
                <img src="{{ url('/img/input.png') }}" width="50" align="left" title="Registrar Juguete">
            </a>
            <a href="{{ url('/list') }}" role="button" aria-pressed="true">
                <img src="{{ url('/img/list.png') }}" width="45" align="right" title="Listar Juguetes">
            </a>
        </div>
        </div>
    </div>
</div>
@endsection
