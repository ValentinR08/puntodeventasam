@extends('base')

@section('content')

<div class="topproducts">
    <h2>PRODUCTOS</h2>
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
<table id="productTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)    
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->name }}</td>
            <td>{{ $producto->price }}</td>
            <td>{{ $producto->quantity }}</td>
            <td>{{ $producto->description }}</td>
            <td>{{ $producto->category->name }}</td>
            <td>
                <button class="view-btn" data-id="{{ $producto->id }}">Ver</button>
                <button class="edit-btn" data-id="{{ $producto->id }}">Editar</button>
                <button class="delete-btn" data-id="{{ $producto->id }}">Eliminar</button>
            </td>
        </tr>
        @endforeach    
    </tbody>
</table>
<div id="productModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h2>Agregar Producto</h2>
        <form id="productForm" class="formulario" method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="nombre" placeholder=" " required>
                <label for="name">Nombre</label>
            </div>
            <div class="form-group">
                <input type="text" id="price" name="precio" placeholder=" " required>
                <label for="price">Precio</label>
            </div>
            <div class="form-group">
                <input type="text" id="quantity" name="cantidad" placeholder=" " required>
                <label for="quantity">Cantidad</label>
            </div>
            <div class="form-group">
                <input type="text" id="description" name="descripcion" placeholder=" " required>
                <label for="description">Descripción</label>
            </div>
            <div class="form-group">
                <select id="category" name="categoria" required>
                    <option value="" selected hidden>Seleccionar categoría</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                    @endforeach
                </select>
                <label for="category">Categoría</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar</button>
            </div>
        </form>
    </div>
</div>
<div id="viewProductModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close-btn" id="closeViewModalBtn">&times;</span>
        <h2>Detalles del Producto</h2>
        <div class="product-details">
            <p><strong>ID:</strong> <span id="viewProductId"></span></p>
            <p><strong>Nombre:</strong> <span id="viewProductName"></span></p>
            <p><strong>Precio:</strong> <span id="viewProductPrice"></span></p>
            <p><strong>Cantidad:</strong> <span id="viewProductQuantity"></span></p>
            <p><strong>Descripción:</strong> <span id="viewProductDescription"></span></p>
            <p><strong>Categoría:</strong> <span id="viewProductCategory"></span></p>
        </div>
    </div>
</div>
<div id="editProductModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close-btn" id="closeEditModalBtn">&times;</span>
        <h2>Editar Producto</h2>
        <form id="editProductForm" class="formulario" method="POST" action="{{ route('products.update',$producto->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" id="editProductId" name="id">
            
            <div class="form-group">
                <input type="text" id="editName" name="nombre" placeholder=" " required>    
                <label for="editName">Nombre</label>
            </div>
            <div class="form-group">
                <input type="text" id="editPrice" name="precio" placeholder=" " required>
                <label for="editPrice">Precio</label>
            </div>
            <div class="form-group">
                <input type="text" id="editQuantity" name="cantidad" placeholder=" " required>
                <label for="editQuantity">Cantidad</label>
            </div>
            <div class="form-group">
                <input type="text" id="editDescription" name="descripcion" placeholder=" " required>
                <label for="editDescription">Descripción</label>
            </div>
            <div class="form-group">                        
                <select id="editCategory" name="categoria" required>
                    <option value="" selected hidden></option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <label for="editCategory">Categoría</label>
            </div>
            <div class="form-group">                        
                <select id="editCategory" name="categoria" required>
                    <option value="" selected hidden></option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <label for="editCategory">Categoría</label>
            </div>
            <div class="modal-buttons">
                <button type="submit" class="save">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
<div id="deleteProductForm" method="POST" action="{{ route('products.destroy', $producto->id) }}">
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
</d>

<script src="{{ asset('js/editarverdelete.js') }}"></script>
@endsection