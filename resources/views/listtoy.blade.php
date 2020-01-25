@extends('layouts.app')

@section('content')
  <div class="main main-raised">
    <div class="container col-md-10">
      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>
        <div class="team">
          <div class="row">
            <div class="table"><b>FILTRAR</b>
                <input id="infilter" type="text" class="form-control">
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">ID</th>
                  <th style="width: 20%">Nombre</th>
                  <th style="width: 40%">Descripción</th>
                  <th class="text-center">Ver</th>
                </tr>
              </thead>
              <tbody class="search"> 
                @foreach ($toys as $toy)
                <tr>
                  <td class="text-center">{{ $toy->id }}</td>
                  <td>{{ $toy->name }}</td>
                  <td>{{ $toy->description }}</td>
                  <td>
                    <a href="{{ url('/descriptiontoy/'.$toy->id) }}">
                        <img src="{{ url('/img/list.png') }}" width="20" title="Ver Juguete">
                    </a>
                  </td>
                </tr>    
                @endforeach
            </table> 
            <div class="container" align="center">
                <a class="btn btn-warning btn-lg active" href="{{ url('/home') }}">Regresar</a>
            </div>        
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- script para funcion del filtrado  -->
 <script>
  $(document).ready(function () {
   $('#infilter').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
        $('.search tr').hide();
        $('.search tr').filter(function () {
            return rex.test($(this).text());
        }).show();

        })

});
</script>
@endsection
