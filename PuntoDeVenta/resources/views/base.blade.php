<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punto de venta</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <box-icon color="white" size="lg" name='user'></box-icon>
      <div>
        <p class="app-sidebar__user-name">Valentín RIvera</p>
        <p class="app-sidebar__user-designation">Administrador</p>
      </div>
    </div>
  
    <ul class="app-menu">
      <li>
        <a class="app-menu__item" href="#">
          <box-icon size="lg" color="white" name='home-alt-2'></box-icon>
          <span class="app-menu__label">Inicio</span>
        </a>
      </li>
      <li class="treeview">
        <a class="app-menu__item" href="#">
          <box-icon size="lg" color="white" type='solid' name='user-rectangle'></box-icon>
          <span class="app-menu__label">Usuarios</span>
        </a>
      </li>
      <li class="treeview">
        <a class="app-menu__item" href="#">
          <box-icon size="lg" color="white" name='box' type='solid' ></box-icon>
          <span class="app-menu__label">Productos</span>
        </a>
      </li>
      <li class="treeview">
        <a class="app-menu__item" href="#">
          <box-icon size="lg" color="white" name='list-ul' ></box-icon>
          <span class="app-menu__label">Catálogo</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="#">
          <box-icon size="lg" color="white" name='shopping-bag' ></box-icon>
          <span class="app-menu__label">Ventas</span>
        </a>
      </li>
    </ul>
  </aside>

    <div class="main-content">
      @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>