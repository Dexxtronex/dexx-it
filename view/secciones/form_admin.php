
<div class="row">
  
  <div class="col-12 col-sm-12 col-md-6-center col-lg-6 col-xl-6 border rounder">
  <h4>Registro de usuario</h4>

    <form method="POST" name="formMensajeria" onsubmit="return validar('registrar_usuario')">
    <div class="form-group">
                    <label>Tipo de Cuenta:</label>
                            <select name="tipo_cuenta" >
                                <option value="0">Admin</option>
                                <option value="1">Peluquero</option>
                                <option value="2">Veterinaria</option>
                            </select>
      </div>
      <div class="form-group">
        <label for="nombre">Ingrese nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre">
    </div>     
      <div class="form-group">
        <label for="apellido">Ingrese apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingrese Apellido">
    </div>
    
    <div class="form-group">
        <label for="cedula">Ingrese Cedula</label>
        <input type="text" class="form-control" id="cedula" placeholder="Ingrese Cedula">
    </div>
      <div class="form-group">
        <label for="correo_registro">Ingrese correo electronico</label>
        <input type="text" class="form-control" id="correo_registro" placeholder="Ingrese Correo Electronico">
    </div>
    <div class="form-group">
        <label for="usuario">Ingrese USUARIO</label>
        <input type="text" class="form-control" id="usuario" placeholder="Ingrese usuario">
    </div>
    <div class="form-group">
        <label for="pass">Ingrese CONTRASEÑA</label>
        <input type="password" class="form-control" id="pass" placeholder="Ingrese contraseña">
    </div>
    

      <button type="submit" class="btn btn-success">Registrar Usuario</button>
    </form>

  </div>