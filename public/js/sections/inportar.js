function cargarformulario(arg){
//funcion que carga todos los formularios del sistema

		if(arg==1){ var url = "form_nuevo_usuario"; }
    if(arg==2){ var url = "form_cargar_datos_usuarios"; }

		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		$.get(url,function(resul){
      $("#contenido_principal").html(resul);
    })
        

}





  //leccion 8 y 9





  $(document).on("submit",".formarchivo",function(e){

     
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");

        if(nombreform=="f_subir_imagen" ){ var miurl="subir_imagen_usuario";  var divresul="notificacion_resul_fci"}
        if(nombreform=="f_cargar_datos" ){ var miurl="cargar_datos";  var divresul="notificacion_resul_fcdu"}

        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);
              $("#fotografia_usuario").attr('src', $("#fotografia_usuario").attr('src') + '?' + Math.random() );               
            },
            //si ha ocurrido un error
            error: function(data){
               alert("ha ocurrido un error") ;
                
            }
        });
    });