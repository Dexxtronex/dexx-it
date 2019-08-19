
<div class="row">
  
  <div class="col-12 col-sm-12 col-md-6-center col-lg-6 col-xl-6 border rounder">
  <h4>¿Desea preguntar algo?, esta es la forma.</h4>

    <form method="get" name="formMensajeria" onsubmit="return validar('correo')">
    <div class="form-group">
                    <label>Tipo de cliente:</label>
                            <select name="tipo_cliente">
                                <option value="0">Frecuente</option>
                                <option value="1">Regular</option>
                                <option value="2">Registrado</option>
                            </select>
        </div>
      <div class="form-group">
        <label for="email_correo">Correo Electronico</label>
        <input type="text" class="form-control" id="email_correo" placeholder="Ingrese Correo Electronico">
        <small id="emailHelp" class="form-text text-muted">Ingrese un correo para responderle.</small>
      </div>
      <div class="form-group">
        <label for="mensaje_correo">Mensaje</label>
        <input type="textarea" class="form-control" id="mensaje_correo" placeholder="Ingrese mensaje">
      </div>
      <div class="form-group">
        <label for="edad_correo">Edad Mascota</label>
        <input type="number" class="form-control" id="edad_correo" value="1" min="0">
      </div>
      <div class="form-group border rounded">
        <h4>Seleccione tipo de mascota</h4>
        <input type="checkbox" name="tipo_mascota" value="gato"/>GATO <br>
        <input type="checkbox" name="tipo_mascota" value="perro"/>PERRO <br>
        <input type="checkbox" name="tipo_mascota" value="ave"/>AVE <br>
      </div>
      <div class="form-group border rounded">
        <h4>Seleccione genero de la mascota</h4>
        <label for="email_correo">Macho</label>
        <input type="radio" name="genero"   value="macho"/>
        <label for="email_correo">Hembra</label>
        <input type="radio" name="genero" value="hembra"/>     
      </div>
      
      <button type="submit" class="btn btn-success">Enviar Consulta</button>
    </form>

  </div>