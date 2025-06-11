<div class="card">
    <div class="card-header">agregar empleado</div>
    <div class="card-body">
       <form action="" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input required
                type="text"
                class="form-control"
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder=""
            />
          
        </div>

        <div class="mb-3">
            <label for="" class="form-label">correo</label>
            <input required
                type="email"
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
            value="editar empleado">
        
        <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">cancelar</a>
        
       </form>
    </div>
</div>
