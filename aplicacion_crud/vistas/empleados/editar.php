<div class="card">
    <div class="card-header">agregar empleado</div>
    <div class="card-body">
       <form action="" method="post">
         
       <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input readonly
                type="text"
                class="form-control" value="<?php echo $empleado->id; ?>"
                name="id"
                id="id"
                aria-describedby="helpId"
                placeholder="id empleado">
</div>

        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input required
                type="text"
                class="form-control" value="<?php echo $empleado->nombre; ?>"
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder="nombre">
          
        </div>

        <div class="mb-3">
            <label for="" class="form-label">correo</label>
            <input required
                type="email" value="<?php echo $empleado->correo; ?>"
                class="form-control"
                name="correo"
                id="correo"
                aria-describedby="emailHelpId"
                placeholder="correo"
            />
            <small id="emailHelpId" class="form-text text-muted"
                ></small
            >
        </div>
        <input
            name=""
            id=""
            class="btn btn-success"
            type="submit"
            value="agregar empleado"
        />
        
        
        
       </form>
    </div>
</div>
