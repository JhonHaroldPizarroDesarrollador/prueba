<div class="form-group">
  {!! Html::decode(Form::label( 'usuario', 'Usuario<span class="required">*</span>', [ 'class' => 'control-label col-md-3 col-sm-3 col-xs-12' ] )) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text( 'usuario', null, [ 'class' => 'form-control col-md-7 col-xs-12',  'id' => 'usuario'] ) !!}
  </div>
</div>
<div class="form-group">
  {!! Html::decode(Form::label( 'password', 'Contraseña<span class="required">*</span>', [ 'class' => 'control-label col-md-3 col-sm-3 col-xs-12' ] )) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::password( 'password', [ 'class' => 'form-control col-md-7 col-xs-12',  'id' => 'password'] ) !!}
  </div>
</div>
<div class="form-group">
  {!! Html::decode(Form::label( 'perfil_usuario_id_perfil_usuario', 'Perfil<span class="required">*</span>', [ 'class' => 'control-label col-md-3 col-sm-3 col-xs-12' ] )) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
     @php
       $perfiles =['' => 'Seleccionar'] + App\PerfilUsuario::pluck('nombre','id_perfil_usuario')->toArray();
     @endphp
    {!! Form::select( 'perfil_usuario_id_perfil_usuario', $perfiles, null, [ 'class' => 'form-control col-md-7 col-xs-12', 'id' => 'id_perfil' ] ) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label( 'persona_id_persona', 'Persona', [ 'class' => 'control-label col-md-3 col-sm-3 col-xs-12' ] ) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
     @php
       $personas =['' => 'Seleccionar'] + App\Persona::getListArray();
     @endphp
    {!! Form::select( 'persona_id_persona', $personas, null, [ 'class' => 'form-control col-md-7 col-xs-12', 'id' => 'id_persona' ] ) !!}
  </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    {!! Form::button('Cancelar', [ 'class' => 'btn btn-primary', 'type' => 'button', 'id' => 'btn_cancelar'] ) !!}
    {!! Form::button('Restaurar', [ 'class' => 'btn btn-primary', 'type' => 'reset', 'id' => 'btn_restaurar'] ) !!}
    {!! Form::submit('Guardar', [ 'class' => 'btn btn-success'] ) !!}
  </div>
</div>
<script type="text/javascript">
  $("#btn_cancelar").on('click', function(){
    window.location = "{{ route('usuarios.index') }}";
  });
    $("#btn_restaurar").on('click', function(){
      var usuario = '';
      var password = '';
      var id_perfil = '';
      @if( @isset($estado) )
        usuario = '{{ $estado->usuario }}';
        password = '{{ $estado->password }}';
        id_perfil = '{{ $estado->perfil_usuario_id_perfil_usuario }}';
        id_persona = '{{ $estado->persona_id_persona }}';
      @endif
      $("#usuario").val(usuario);
      $("#password").val(password);
      $("#id_persona").val(id_persona);
    });
</script>
