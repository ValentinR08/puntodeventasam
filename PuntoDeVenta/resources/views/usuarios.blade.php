@extends('base')

@section('content')

<div class="topusers">
    <h2>USUARIOS</h2>
    <button id="newUserBtn" class="btn btn-primary">Agregar</button>
</div>
<table id="userTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre y Apellido</th>
            <th>Genero</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Samantha Gallegos</td>
            <td>Femenino</td>
            <td>samanthagallegos@gmail.com</td>
            <td>
                <button class="view-btn">Ver</button>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Juan Leal</td>
            <td>Masculino</td>
            <td>juanleal@email.com</td>
            <td>
                <button class="view-btn">Ver</button>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </td>
        </tr>
    </tbody>
</table>
<div id="userModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h2>Agregar Usuario</h2>
        <form id="userForm" class="formulario">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder=" " required>
                <label for="name">Nombre</label>
            </div>
            <div class="form-group">
                <input type="text" id="apellido" name="apellido" placeholder=" " required>
                <label for="apellido">Apellido</label>
            </div>
            <div class="form-group">
                <select id="gender" name="gender" required>
                    <option value="" selected hidden></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <label for="gender">Género</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required autocomplete="off">
                <label for="email">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder=" " required autocomplete="new-password">
                <label for="password">Contraseña</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar</button>
            </div>
        </form>
    </div>
</div>
<div id="viewUserModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close-btn" id="closeViewModalBtn">&times;</span>
        <h2>Detalles del Usuario</h2>
        <div class="user-details">
            <p><strong>ID:</strong> <span id="viewUserId"></span></p>
            <p><strong>Nombre y Apellido:</strong> <span id="viewUserName"></span></p>
            <p><strong>Género:</strong> <span id="viewUserGender"></span></p>
            <p><strong>Email:</strong> <span id="viewUserEmail"></span></p>
        </div>
    </div>
</div>
<div id="editUserModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close-btn" id="closeEditModalBtn">&times;</span>
        <h2>Editar Usuario</h2>
        <form id="editUserForm" class="formulario">
            <input type="hidden" id="editUserId" name="id">
            
            <div class="form-group">
                <input type="text" id="editName" name="name" placeholder=" " required>
                <label for="editName">Nombre</label>
            </div>
            <div class="form-group">
                <input type="text" id="editApellido" name="apellido" placeholder=" " required>
                <label for="editApellido">Apellido</label>
            </div>
            <div class="form-group">
                <select id="editGender" name="gender" required>
                    <option value="" selected hidden></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <label for="editGender">Género</label>
            </div>
            <div class="form-group">
                <input type="email" id="editEmail" name="email" placeholder=" " required autocomplete="off">
                <label for="editEmail">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="editPassword" name="password" placeholder=" " autocomplete="new-password">
                <label for="editPassword">Nueva Contraseña (opcional)</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
<div id="deleteUserModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeDeleteModalBtn">&times;</span>
        <h2>¿Estás seguro de que deseas eliminar este usuario?</h2>
        <p class="warning-text">Esta acción no se puede deshacer.</p>
        <div class="modal-buttons">
            <button id="confirmDeleteBtn" class="btn btn-danger">Eliminar</button>
        </div>
    </div>
</div>



<script src="{{ asset('js/ver.js') }}"></script>
<script src="{{ asset('js/editar.js') }}"></script>
<script src="{{ asset('js/delete.js') }}"></script>
@endsection

