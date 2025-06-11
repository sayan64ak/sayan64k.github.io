
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>correo</th>
                 <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado){?>
            <tr>
                <td scope="row">  <?php echo $empleado->id; ?> </td>
                <td> <?php echo $empleado->nombre;?>  </td>
                <td> <?php echo $empleado->correo;?> </td>
                <td>
                 <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?> " class="btn btn-info">editar</a>
                    <a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?> " class="btn btn-danger">borrar</a>
            </div>

            </td>

            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    <a name="" id=""class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">añadir empleado</a>
    

