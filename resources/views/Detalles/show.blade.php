@extends('layout.app')

@section('title', "Show Detalles");

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
        <li class="breadcrumb-item active">Detalles Prestamo -  {{$detallesPrestamo->id_prestamo}}</li>
      </ol>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Prestamo</th>
            <th>ID Externo</th>
            <th>Detalles</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$detallesPrestamo->id_prestamo}}</td>
              <td>{{$detallesPrestamo->id_externo}}</td>
              <td>{{$detallesPrestamo->detalles}}</td>
              <td>
                <a name="button" href="{{route('detallesprestamo.edit', $detallesPrestamo)}}" class="btn btn-primary"> Editar</a>
                @if(Auth::user()->cargo === "administrador")
                <a class="btn btn-primary" href="{{route('detallesprestamo.index')}}" onclick="event.preventDefault();document.getElementById('edit-form').submit();">{{__('Eliminar')}}
                </a>
                <form id="edit-form" action="{{ route('detallesprestamo.destroy', $detallesPrestamo) }}" method="POST" style="display: none;">
                    @csrf
                    {{method_field('DELETE')}}
                </form>
                @endif
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
{{--End section: content--}}
