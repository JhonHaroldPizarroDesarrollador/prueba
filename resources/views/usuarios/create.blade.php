@extends('layouts.main')
@section('title','Usuarios')
@section('title_page','Usuarios')
@section('action_page')
  <div class="pull-right">
    <a href="{{ route("usuarios.index") }}" class="btn btn-app">
      <i class="fa fa-list"></i> Listado
    </a>
    <a href="{{ url()->previous() }}" class="btn btn-app">
      <i class="fa fa-arrow-left"></i> Regresar
    </a>
  </div>
@endsection
@section('content')
  {{-- Notificaciones errores --}}
  @include('layouts.error', [ 'title_notif' => "Usuario"] )
  {{-- /Notificaciones errores --}}
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <div class="">
            Nuevo Usuario
          </div>
        </div>

        <div class="x_content">
          <br>
          {!! Form::open(
                          [
                            'route'   =>  'usuarios.store',
                             'method' =>  'POST',
                             'class'  =>  'form-horizontal form-label-left'
                          ]
                        )
           !!}
            @include('usuarios.fragment.form')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
