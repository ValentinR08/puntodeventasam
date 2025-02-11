<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <i class="fas fa-cash-register"></i> POS
            </div>
            <div class="menu-item">
                <i class="fas fa-home"></i> Inicio
            </div>
            <div class="menu-item">
                <i class="fas fa-shopping-cart"></i> Ventas
            </div>
            <div class="menu-item">
                <i class="fas fa-box-open"></i> Productos
            </div>
            <div class="menu-item">
                <i class="fas fa-chart-bar"></i> Reportes
            </div>
            <div class="menu-item">
                <i class="fas fa-cog"></i> Configuración
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Estadísticas -->
            <div class="stats-container">
                <div class="stat-card">
                    <i class="fas fa-box stat-icon text-blue"></i>
                    <h3>Productos</h3>
                    <p class="stat-value">1,234</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-coins stat-icon text-green"></i>
                    <h3>Ventas Hoy</h3>
                    <p class="stat-value">$12,345</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-chart-line stat-icon text-orange"></i>
                    <h3>Inventario</h3>
                    <p class="stat-value">85%</p>
                </div>
            </div>

            <!-- Productos -->
            <h2>Productos Destacados</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" class="product-image" alt="Producto">
                    <h4>Laptop Gamer</h4>
                    <p>$1,299.99</p>
                    <span class="badge">En stock</span>
                    <button class="btn-add"><i class="fas fa-cart-plus"></i></button>
                </div>
                <!-- Repetir más productos -->
            </div>
        </div>
    </div>
</body>
</html>