<h1 style="display: flex; justify-content: center">Tabla de Estudiantes</h1>
<button style="display: block; margin-left: auto; margin-right: auto;" type="button" class="btn btn-success"
    data-bs-toggle="modal" data-bs-target="#anadirUsuarioModal">Añadir Estudiante</button>
<div class="modal fade" id="anadirUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="anadirUsuarioModalLabel">Añadir Estudiante</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenido del formulario para editar un usuario -->
                <form action="./models/guardar.php" method="POST">
                    <div class="form-group">
                        <label for="editCedula">Cedula:</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="">
                    </div>
                    <div class="form-group">
                        <label for="editApellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="">
                    </div>
                    <div class="form-group">
                        <label for="editDireccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="">
                    </div>
                    <div class="form-group">
                        <label for="editTelefono">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="">
                    </div>
                    <div class="form-group">
                        <label for="curId">Curso</label>
                        <select class="form-select" id="cuID" name="cuID" required>
                            <?php
                            include_once 'models/selectCUID.php';
                            foreach ($result as $row) {
                                echo "<option value='" . $row['curId'] . "'>" . $row['nombre'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Agregar Estudiante</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">CUID</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/selectEst.php';
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['estCedula'] . "</td>";
                echo "<td>" . $row['estNombre'] . "</td>";
                echo "<td>" . $row['estApellido'] . "</td>";
                echo "<td>" . $row['estDireccion'] . "</td>";
                echo "<td>" . $row['estTelefono'] . "</td>";
                echo "<td>" . $row['curId'] . "</td>";
                echo '<td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal' . $row['estCedula'] . '">Editar</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUsuarioModal' . $row['estCedula'] . '">Eliminar</button>
                </td>';
                echo "</tr>";
                echo '<div class="modal fade" id="editarUsuarioModal'.$row['estCedula'].'" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="crearUsuarioModalLabel">Editar Usuario</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Contenido del formulario para editar un usuario -->
                                            <form action="./models/actualizar.php" method="POST">
                                                <div class="form-group">
                                                    <label for="editCedula">Cedula:</label>
                                                    <input type="text" class="form-control" id="cedula" name="cedula" value="'.$row['estCedula'].'" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="editNombre">Nombre:</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" value="'.$row['estNombre'].'">
                                                    </div>
                                                <div class="form-group">
                                                    <label for="editApellido">Apellido:</label>
                                                    <input type="text" class="form-control" id="apellido" name="apellido" value="'.$row['estApellido'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editDireccion">Dirección:</label>
                                                    <input type="text" class="form-control" id="direccion" name="direccion" value="'.$row['estDireccion'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editTelefono">Telefono:</label>
                                                    <input type="text" class="form-control" id="telefono" name="telefono" value="'.$row['estTelefono'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cuID">Curso</label>
                                                    <input type="text" class="form-control" id="cuID" name="cuID" value="'.$row['curId'].'">
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Editar Usuario</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        
                        echo '<div class="modal fade" id="deleteUsuarioModal'.$row['estCedula'].'" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="crearUsuarioModalLabel">Eliminar Usuario</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Contenido del formulario para editar un usuario -->
                                            <form action="models/borrar.php" method="POST">
                                                <div class="form-group">
                                                    <label for="deleteEst">¿Estás seguro de eliminar este estudiante?</label>
                                                    <input type="hidden" class="form-control" id="cedula" name="cedula" value="'.$row['estCedula'].'" readonly>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-danger">Confirmar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
            ?>
        </tbody>
    </table>
</div>