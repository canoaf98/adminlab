@extends('layout.app')

@section('title', "Crear Categoria");

{{--Section: content --}}
@section('content')

{{--Section; meta--}}
  @section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <li class="breadcrumb-item">Crear
        </li>
        <li class="breadcrumb-item active"><a href="{{route('categoria.index')}}">Categoría</a></li>
      </ol>
      <form class="" action="{{route('categoria.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{old('nombre')}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12">

            <label for="detalles">Detalles</label>
            <textarea type="text" class="form-control" name="detalles" placeholder="Detalles" value="{{old('detalles')}}">
            {!!$errors->first('detalles', '<span class=error>:message</span>')!!}
            </textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

@endsection
{{--End section: content--}}
