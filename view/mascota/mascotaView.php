<div style="padding-top: 15px">
<h5>Mascota</h5>
</div>
<div>
    <a href="index.php?c=mascota&a=mostrar">Nueva Mascota</a>
</div>
<div style="padding: 10px">
<form action="index.php?c=mascota&a=buscar" method="POST">
    <input type="text" name="b" placeholder="buscar..."/>
    <input type="submit" name="bot" value="Buscar"/>
</form>
</div>
<table>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Fecha Nacimiento</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // if(isset($resultados)){
        // echo $resultados;
                foreach ($resultados as $mas) {
        ?>
            <tr>
                <td><?php echo $mas->mas_codigo ?></td>
                <td><?php echo $mas->mas_nombre ?></td>
                <td><?php echo $mas->cat_descripcion ?></td>
                <td><?php echo $mas->mas_sexo ?></td>
                <td><?php echo $mas->mas_fechaNacimiento ?></td>
                <td><a href="index.php?c=actividad&a=mostrar&id=<?php echo $mas->mas_idActividad ?>">Editar</a></td>
                <td><a href="index.php?c=actividad&a=eliminar&id=<?php echo $mas->mas_idActividad ?>" onclick="javascript:return confirm('esta seguro?')">Eliminar</a></td>
            </tr>
        <?php 
                }
            // }
        ?> 


    </tbody>
</table> 
     