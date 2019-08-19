
  <div class="col-12 col-sm-12 col-md-6-center col-lg-6 col-xl-6 border rounder">
  <h4>¿Desea suscribirse ? </h4>
  
    <form method="get" name="formMensajeria" onsubmit="return validar('suscribirse')">
    <div class="form-group">
        <label for="email_correo">Ingrese nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre">
    </div>     
      <div class="form-group">
        <label for="email_correo">Ingrese apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingrese Apellido">
    </div>
    
    <div class="form-group">
        <label for="email_correo">Ingrese Cedula</label>
        <input type="text" class="form-control" id="cedula" placeholder="Ingrese Cedula">
    </div>
      <div class="form-group">
        <label for="correo_suscribirse">Ingrese correo electronico</label>
        <input type="text" class="form-control" id="correo_suscribirse" placeholder="Ingrese Correo Electronico">
    </div>
          <div class="form-group border rounded">
        <h4>Seleccione tipo de mascota</h4>
        <input type="checkbox" name="tipo_mascota_gato" value="gato"/>GATO 
        <input type="checkbox" name="tipo_mascota_perro" value="perro"/>PERRO 
        <input type="checkbox" name="tipo_mascota_ave" value="ave"/>AVE 
      </div>
      <div class="form-group border rounded">
        <h4>Seleccione genero</h4>
        <label for="email_correo">Masculino</label>
        <input type="radio" name="genero1" value="Masculino"/>
        <label for="email_correo">Femenino</label>
        <input type="radio" name="genero1" value="Femenino"/>     
      </div>
      
      <button type="submit" class="btn btn-success">Enviar Suscripción</button>
    </form>

  </div>
</div>