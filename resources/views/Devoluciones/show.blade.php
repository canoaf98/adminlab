@extends('layout.app')

@section('title', "Show Devolucion");

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
        <li class="breadcrumb-item active">Devolucion {{$devolucion->id_prestamo}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Prestamo</th>
            <th>Carga Batería</th>
            <th>Observaciones</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$devolucion->id_upb}}</td>
              <td>{{$devolucion->carga_bateria}}</td>
              <td>{{$devolucion->observaciones}}</td>
              <td>
                <form class="form-inline" action="{{ route('devoluciones.destroy', $devolucion)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <div class="row">
                    <div class="col">
                      <a name="button" href="{{route('devoluciones.edit', $devolucion)}}" class="btn btn-primary"> Editar</a>
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
