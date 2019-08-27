@extends('layouts.main')
@section('title','Usuarios')
@section('title_page','Usuarios')
@section('content')
  {{-- Notificaciones informativas --}}
  @include('layouts.info', [ 'title_notif' => "Usuarios"] )
  {{-- /Notificaciones informativas --}}
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <div class="">
            <a href="{{ route('usuarios.create') }}" class="btn btn-app">
              <i class="fa fa-plus"></i> Nuevo
            </a>
          </div>
        </div>

        <div class="x_content">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuarios as $usuario)
                <tr>
                  <td>{{ $usuario->id_usuario}}</td>
                  <td>{{ $usuario->usuario}}</td>
                  <td>{{ $usuario->perfil->nombre }}</td>
                  <td class="text-center">
                    <a href="{{ route("usuarios.show", $usuario->id_usuario) }}" class="btn btn-link"> <i class="fa fa-eye"></i></a>
                    <a href="{{ route("usuarios.edit", $usuario->id_usuario) }}" class="btn btn-link"> <i class="fa fa-edit"></i></a>
                    <form id="form-delet{{ $usuario->id_usuario }}" class="visible-lg-inline" action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-link" type="button" name="button" onclick="borrar('{{ $usuario->id_usuario }}')">
                        <i class="fa fa-trash-o"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#datatable").DataTable({
          language: {
                      "url" : "{{ asset("vendors/datatables.net/language/es.json") }}"
                    }
        });
    });
  </script>
  @include('usuarios.fragment.script-delete')
@endsection
