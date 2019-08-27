<script type="text/javascript">
  function borrar( id )
  {
    BootstrapDialog.show({
                            title : "Eliminar Usuario",
                            message: "¿Desea eliminar el usuario con ID:"+ id +"?",
                            buttons : [
                                        {
                                          label : "Cancelar",
                                          cssClass : "btn btn-primary",
                                          action : function(dialog){
                                            dialog.close();
                                          }
                                        },
                                        {
                                          label : "Aceptar",
                                          cssClass : "btn btn-success",
                                          action : function(){
                                            $("#form-delet"+id).submit();
                                          }
                                        },
                                      ]
                          });
  }
</script>
