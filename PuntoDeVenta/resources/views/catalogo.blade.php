@extends('base')

@section('content')

<div class="topcatalogo">
    <h2>CATÁLOGO</h2>
    <button id="newProductBtn" class="btn btn-primary">Agregar</button>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<table id="catalogoTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($catalogos as $catalogo)    
        <tr>
            <td>{{ $catalogo->id }}</td>
            <td>{{ $catalogo->TipoProducto }}</td>
            <td>
                <button class="view-btn" data-id="{{ $catalogo->id }}">Ver</button>
                <button class="edit-btn" data-id="{{ $catalogo->id }}">Editar</button>
                <button class="delete-btn" data-id="{{ $catalogo->id }}">Eliminar</button>
            </td>
        </tr>
        @endforeach    
    </tbody>
</table>
<div id="catalogoModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h2>Agregar Producto</h2>
        <form id="catalogoForm" class="formulario" method="POST" action="{{ route('catalogo.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="nombre" placeholder=" " required>
                <label for="name">Nombre</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar</button>
            </div>
        </form>
    </div>
</div>
<div id="viewCatalogoModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close-btn" id="closeViewModalBtn">&times;</span>
        <h2>Detalles del Producto</h2>
        <div class="product-details">
            <p><strong>ID:</strong> <span id="viewCatalogoId"></span></p>
            <p><strong>Nombre:</strong> <span id="viewCatalogoName"></span></p>
            <p><strong>Precio:</strong> <span id="viewCatalogoPrice"></span></p>
            <p><strong>Cantidad:</strong> <span id="viewCatalogoQuantity"></span></p>
            <p><strong>Descripción:</strong> <span id="viewCatalogoDescription"></span></p>
            <p><strong>Categoría:</strong> <span id="viewCatalogoCategory"></span></p>
        </div>
    </div>
</div>
<div id="editCatalogoModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close-btn" id="closeEditModalBtn">&times;</span>
        <h2>Editar Producto</h2>
        <form id="editCatalogoForm" class="formulario" method="POST" action="{{ route('catalogo.update',$catalogo->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="editCatalogoId" name="id">
            <div class="form-group">
                <input type="text" id="editName" name="TipoProducto" placeholder=" " required>
                <label for="editName">Nombre</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
<div id="deleteCatalogoForm" method="POST" action="{{ route('catalogo.destroy', $catalogo->id) }}">
    @csrf
    @method('DELETE')
    <div class="modal-content">
        <span class="close-btn" id="closeDeleteModalBtn">&times;</span>
        <h2>¿Estás seguro de que deseas eliminar este producto?</h2>
        <p class="warning-text">Esta acción no se puede deshacer.</p>
        <div class="modal-buttons">
            <button id="confirmDeleteBtn" class="btn btn-danger" type="submit">Eliminar</button>
        </div>
    </div>
</div>

<script src="{{ asset('js/editarverdelete.js') }}"></script>
@endsection