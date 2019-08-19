  function validar(tipo_formulario) {
     /*comparaciones*/
     var alphareg = /^[A-Za-z]*\s()[A-Za-z]*$/g;
     var emailreg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    /*Obtenecion de variables*/
     var txtEmail = document.getElementById("email_correo");
    if(tipo_formulario=="correo"){
        var txtMensaje = document.getElementById("mensaje_correo");
        var txtedad = document.getElementById("edad_correo");

        var radiosGenero =  document.querySelectorAll("input[name='genero']");
        var resul = true; // variable para retorno
        var mensaje="Error: ";
        valor = txtMensaje.value;
        //llama la variable alphareg de arriba
        if(valor.length===0){ 
        mensaje+=" \n El mensaje no es correcto";
         resul = false;
        }
        valor = txtedad.value;
        //llama la variable alphareg de arriba
        if(valor.length===0){ 
        mensaje+=" \n La edad  no es correcto";
         resul = false;
        }
        //Email
        valor = txtEmail.value;
        if(valor.length===0 || !valor.match(emailreg)){
        mensaje+=" \n El correo ingresado no es correcto";
        resul = false;
        }
        var seleccionado = false;
        for(var i=0; i<radiosGenero.length; i++){
            if(radiosGenero[i].checked){
                seleccionado = true;
                break;
            }
        }
        if(seleccionado==false){
            mensaje+=" \n Seleccione un género";
            resul = false;
        }
      /*
        valor = selectTipoCliente.value;
        if(valor.length===0 || valor==='0'){
        mensaje+=" \n El tipo de cuenta no es correcto";
        resul = false;
        }
        */
    
       if(!resul){
        alert(mensaje);
        }else{
            alert("Correo enviado exitosamente");
        }

       return resul;

    }else{


        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido");
        var cedula = document.getElementById("cedula");
        var radiosGenero1 =  document.querySelector("input[name='genero1']");
        var txtEmail1 =  document.getElementById("correo_suscribirse");
        if(tipo_formulario=="suscribirse"){
            var resul = true; // variable para retorno
            var mensaje="Error: ";
            valor = txtEmail1.value;
            if(valor.length===0 || !valor.match(emailreg)){
                mensaje+=" \n El correo ingresado no es correcto";
                resul = false;
            }
            valor = nombre.value;
            //llama la variable alphareg de arriba
            if(valor.length===0 ){ 
                mensaje+=" \n El nombre no es correcto";
                 resul = false;
            }
            valor = apellido.value;
            //llama la variable alphareg de arriba
            if(valor.length===0){ 
                mensaje+=" \n El apellido no es correcto";
                 resul = false;
            }     
            valor = cedula.value;
            //llama la variable alphareg de arriba
            if(valor.length===0){ 
                mensaje+=" \n El cedula no es correcto";
                 resul = false;
            }  
                     
           if(!resul){
            alert(mensaje);
            }else{
                alert("Suscripción  enviado exitosamente");
            }
    
           return resul;
        }else if(tipo_formulario=="registrar_usuario"){
            var usuario = document.getElementById("usuario");
            var pass = document.getElementById("pass");
            var nombre = document.getElementById("nombre");
            var apellido = document.getElementById("apellido");
            var cedula = document.getElementById("cedula");
            var txtEmail1 =  document.getElementById("correo_registro");
            var resul = true; // variable para retorno
            var mensaje="Error: ";
            valor = txtEmail1.value;
            if(valor.length===0 || !valor.match(emailreg)){
                mensaje+=" \n El correo ingresado no es correcto";
                resul = false;
            }
            valor = nombre.value;
            if(valor.length===0 ){ 
                mensaje+=" \n El nombre no es correcto";
                 resul = false;
            }
            valor = usuario.value;
            if(valor.length===0){ 
                mensaje+=" \n El usuario no es correcto";
                 resul = false;
            }
            valor = apellido.value;
            if(valor.length===0){ 
                mensaje+=" \n El apellido no es correcto";
                 resul = false;
            }
            valor = cedula.value;
            if(valor.length===0){ 
                mensaje+=" \n El cedula no es correcto";
                 resul = false;
            }
            valor = pass.value;
            if(valor.length===0){ 
                mensaje+=" \n El pass no es correcto";
                 resul = false;
            }
            if(!resul){
                alert(mensaje);
                }else{
                    alert("Registrado con exito");
                }
        
               return resul;
        }

    } 
   
}
