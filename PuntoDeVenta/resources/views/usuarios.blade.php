@extends('base')

@section('content')

<div class="topusers">
    <h2>USUARIOS</h2>
    <button id="newUserBtn" class="btn btn-primary">Nuevo</button>
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
                <label for="name">Apellido</label>
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
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar</button>
            </div>
        </form>
    </div>
</div>


@endsection

