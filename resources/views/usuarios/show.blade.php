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
    <a href="{{ route("usuarios.edit", $usuario->id_usuario) }}" class="btn btn-app">
      <i class="fa fa-edit"></i> Editar
    </a>
    <form id="form-delet{{ $usuario->id_usuario }}" class="form-btn-app btn" action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
      <a class="btn btn-app" type="button" name="button" onclick="borrar('{{ $usuario->id_usuario }}')">
        <i class="fa fa-trash"></i> Eliminar
      </a>
    </form>
    <a href="{{ route("usuarios.index") }}" class="btn btn-app">
      <i class="fa fa-arrow-left"></i> Regresar
    </a>
  </div>
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <div class="">
            {{ $usuario->usuario }}
          </div>
        </div>

        <div class="x_content">
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <h4 class="brief"><i>Detalle del usuario</i></h4>
                <h2><strong>Usuario: </strong>{{ $usuario->usuario }}</h2>
                <ul class="list-unstyled">
                  <li><i class="fa fa-group"></i> Perfil: <strong>{{ $usuario->perfil->nombre }}</strong></li>
                  @if ( !@empty( $usuario->perfil->descripcion ) )
                    <li><i>{{ $usuario->perfil->descripcion }}</i></li>
                  @endif
                  <li><strong>ID:</strong> {{ $usuario->id_usuario }} </li>
                </ul>
              </div>
            </div>
          </div>
          @if ( !@empty( $usuario->persona ) )
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
              <div class="well profile_view">
                <div class="col-sm-12">
                  <h4 class="brief"><i>Datos del usuario</i></h4>
                  <h2><strong>Nombre: </strong>{{ $usuario->persona->nombres }} {{ $usuario->persona->apellidos }}</h2>
                  <ul class="list-unstyled">
                    @if ( !@empty( $usuario->persona->email ) )
                      <li><i class="fa fa-envelope"></i> E-Mail: <strong>{{ $usuario->persona->email }}</strong></li>
                    @endif
                    @if ( !@empty( $usuario->persona->telefono ) )
                      <li><i class="fa fa-phone"></i> Teléfono: <strong>{{ $usuario->persona->telefono }}</strong></li>
                    @endif
                    @if ( !@empty( $usuario->persona->documento ) )
                      <li><i class="fa fa-credit-card"></i> Documento: <strong>{{ $usuario->persona->documento }}</strong></li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  @include('usuarios.fragment.script-delete')

@endsection
