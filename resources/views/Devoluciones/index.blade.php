@extends('layout.app')

@section('title', "Index Devoluciones");

{{--Section: content --}}
@section('content')

{{--Section; meta--}}
  @section('meta')

  @endsection
  {{--End section; meta--}}

  {{--Section: styles--}}
  @section('styles')

  @endsection
  {{--Section: styles--}}
  <div class="content-wrapper">
    <div class="container">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Ver</a>
        </li>
        <li class="breadcrumb-item active">Devoluciones</li>
      </ol>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Número de prestamo</th>
              <th>Número de equipo</th>
              <th>Solicitado por</th>
              <th>Recibido por</th>
              <th>Estado</th>
              <th>Equipo</th>
              <th>Observaciones</th>
              <th>Fecha/Hora de entrega</th>
            </tr>
          </thead>
          <tbody>
            @foreach($devoluciones as $devolucion)
              <tr>
                <td><a href="{{route('prestamo.show', $devolucion->prestamo)}}">{{$devolucion->prestamo->id}}</a></td>
                <td><a href="{{route('equipo.show', $devolucion->prestamo->equipo)}}">{{$devolucion->prestamo->equipo->numero_equipo}}</a></td>
                <td><a href="{{route('usuario.show', $devolucion->prestamo->usuario)}}">{{$devolucion->prestamo->usuario->nombre}} {{$devolucion->prestamo->usuario->apellido}} {{$devolucion->prestamo->usuario->id_upb}}</a></td>
                <td>{{$devolucion->user->name}} {{$devolucion->user->id_upb}}</td>
                <td>{{$devolucion->estado}}</td>
                <td>{{$devolucion->prestamo->equipo->categoria->detalles}}</td>
                <td>{{$devolucion->observaciones}}</td>
                <td>{{$devolucion->created_at}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
{{--End section: content--}}
