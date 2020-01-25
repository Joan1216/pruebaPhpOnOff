@extends('layouts.app')

@section('content')
  <div class="main main-raised">
    <div class="container col-md-10">
      <div class="section text-center">
        <h2 class="title">Jueguete {{ $showtoy->name }}</h2>
        <div class="team">
          <div class="row">        
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">ID</th>
                  <th style="width: 20%">Nombre</th>
                  <th style="width: 40%">Descripción</th>
                  <th class="text-center">Comentario</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">{{ $showtoy->id }}</td>
                  <td>{{ $showtoy->name }}</td>
                  <td>{{ $showtoy->description }}</td>
                  <td>{{ $showtoy->comment }}</td>
                </tr>    
            </table>
            <div class="container" align="center">
                <a class="btn btn-warning btn-lg active" href="{{ url('/list') }}">Regresar</a>
            </div>   
            </div>        
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection