<div class="breadcrumb" style="margin-top: 20px; width: 80%">
    <a href="index.php?c=mascota&a=buscar">Mascota</a> -> 
    <?php echo isset($mascota)?$mascota->mas_nombre:''; ?>
 </div>

<form action="index.php?c=actividad&a=guardar" method="post" style="width: 60%">
    <input type="hidden" name="id" value="<?php echo isset($actividad)?$actividad->act_idActividad:''; ?>" />

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo isset($actividad)?$actividad->act_nombre:''; ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo isset($actividad)?$actividad->act_descripcion:''; ?>" class="form-control" placeholder="descripcion" />
    </div>

    <div class="form-group">
        <label>Precio x persona</label>
        <input type="text" name="precioxpersona" value="<?php echo isset($actividad)?$actividad->act_precioxpersona:''; ?>" class="form-control" placeholder="Ingrese precio de la actividad por persona" />
    </div>

    <div class="form-group">
        <label>Precio x grupo</label>
        <input type="text" name="precioxgrupo" value="<?php echo isset($actividad)?$actividad->act_precioxgrupo:''; ?>" class="form-control" placeholder="Ingrese precio de la actividad por grupo" />
    </div>


    <div class="form-group">
        <label>Tipo</label>
        <select name="tipo" class="form-control">
                <option value="">seleccionar</option>
                <?php foreach ($tiposAct as $ti) { ?>
                    <option value="<?php echo $ti['tipo_act_id']; ?>" 
                        <?php 
                                if(isset($actividad)){
                                    if($ti['tipo_act_id']==$actividad->act_idTipo)
                                    echo 'selected';
                                }
                            ?>>
                        <?php echo $ti['tipo_act_nombre']; ?>
                    </option>
                <?php } ?>

        </select>
    </div>

    <div class="text-right">
        <input type="submit" value="Guardar">

    </div>
</form>