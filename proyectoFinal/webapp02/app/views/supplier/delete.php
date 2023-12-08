<?php
    $supplier = $data['supplier'];
?>
    <div class="border border-secondary-300 p-4 ">
        <h2 class='text-info'>Borrar Suplidor</h2>

        <form action="index.php?url=supplier/remove/<?php echo $supplier['id']; ?>" method="post" class='form'>
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="<?php echo $supplier['id']; ?>" required>
                <input type="hidden" name="accion" value="update">

                <label>Nombre</label>
                <input type="text" name="nombre" class='form-control' value="<?php echo $supplier['nombre']; ?>" readonly>
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" class='form-control' value="<?php echo $supplier['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <div class="row alert alert-danger">
                    <div class="col-8">
                        <h3>¿Está seguro que desea borrar el récord?</h3>
                    </div>
                    <div class="col text-end">
                        <a href="./index.php?url=supplier/remove/<?php echo $supplier['id']; ?>" class='btn btn-primary'>Borrar</a>         
                    </div>
                </div>
            </div>
        </form>
    </div>
