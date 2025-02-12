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
        <form id="userForm">
            <div class="form-group">
                <label for="name">Nombre y Apellido</label>
                <input type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="gender">Género</label>
                <select id="gender">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <button type="submit" class="btn">Guardar</button>
        </form>
    </div>
</div>


@endsection

