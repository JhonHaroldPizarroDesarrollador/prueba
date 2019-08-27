@extends('layouts.main')
@section('title','Usuarios')
@section('title_page','Usuario')
@section('action_page')
  <div class="pull-right">
    <a href="{{ route("usuarios.index") }}" class="btn btn-app">
      <i class="fa fa-list"></i> Listado
    </a>
    <a href="{{ route('usuarios.create') }}" class="btn btn-app">
      <i class="fa fa-plus"></i> Nuevo
    </a>
    <form id="form-delet{{ $usuario->id_usuario }}" class="form-btn-app btn" action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
      <a class="btn btn-app" type="button" name="button" onclick="borrar('{{ $usuario->id_usuario }}')">
        <i class="fa fa-trash"></i> Eliminar
      </a>
    </form>
    <a href="{{ url()->previous() }}" class="btn btn-app">
      <i class="fa fa-arrow-left"></i> Regresar
    </a>
  </div>
@endsection
@section('content')
  {{-- Notificaciones errores --}}
  @include('layouts.error', [ 'title_notif' => "Estado"] )
  {{-- /Notificaciones errores --}}
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <div class="">
            {{ $usuario->nombre }}
          </div>
        </div>

        <div class="x_content">
          <br>
          {!! Form::model( $usuario, [
                                              'route'   =>  [
                                                              'usuarios.update',
                                                              $usuario->id_usuario
                                                            ],
                                               'method' =>  'PUT',
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

  @include('usuarios.fragment.script-delete')

@endsection
