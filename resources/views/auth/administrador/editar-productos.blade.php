<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/administrador/editar-producto.css') }}">
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
        <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
        <a href="{{ url('/roles') }}">Roles</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="container">
        <form id="product-form" action="{{ route('guardar.producto') }}" method="POST">
            @csrf
            @if (session('message'))
            <div class="alert alert-success" id="flash-message">
                {{ session('message') }}
            </div>
            @endif
            <h1 style="text-align: center;">Crear Producto</h1>
            <div class="form-group">
                <label for="productImage">Seleccionar Imagen:</label>
                <input type="text" class="form-control-file" id="productImage" name="image" required>
            </div>

            <div class="form-group">
                <label for="productName">Nombre del Producto:</label>
                <input type="text" class="form-control" id="productName" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="productFeatures">Características:</label>
                <textarea class="form-control" id="productFeatures" name="Descripción"></textarea>
            </div>

            <div class="form-group">
                <label for="productPrice">Precio:</label>
                <input type="number" class="form-control" id="productPrice" name="precio" required>
            </div>

            <div class="form-group">
                <label for="productDisponible">Disponible:</label>
                <input type="number" class="form-control" id="productDisponible" name="Stock">
            </div>

            <div class="form-group">
                <label for="productView">Vista de Destino:</label>
                <select class="form-control" id="productView" name="slug" required>
                    <option value="" disabled selected>Selecciona una vista</option>
                    <option value="bebidas-alcoholicas">Bebidas Alcoholicas</option>
                    <option value="hamburguesas">Hamburguesas</option>
                    <option value="helados">Heladeria</option>
                    <option value="comidas-rapidas'">Comidas Rapidas</option>
                    <option value="refrescos">Refrescos</option>
                    <option value="combos">Combos</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" id="add-product-button">Agregar Producto</button>
        </form>

        <div id="product-list" class="d-flex justify-content-center"></div>
    </div>

    <div class="modal fade" id="featuresModal" tabindex="-1" role="dialog" aria-labelledby="featuresModalLabel" aria-hidden="true">


        @csrf
        @method('PUT')
        <label for="productImage">Seleccionar Imagen:</label>
        <input type="text" class="form-control-file" id="productImage" name="image" required>
        <label for="productName">Nombre del Producto:</label>
        <input type="text" class="form-control" id="productName" name="nombre" required>
        <label for="productFeatures">Características:</label>
        <textarea class="form-control" id="productFeatures" name="Descripción"></textarea>
        <label for="productPrice">Precio:</label>
        <input type="number" class="form-control" id="productPrice" name="precio" required>
        <label for="productDisponible">Disponible:</label>
        <input type="number" class="form-control" id="productDisponible" name="Stock">
        <button type="submit">Actualizar</button>
        </form>

    </div>


    <div class="ProductosBD">

        <div class="container-product">
            <h3>Bebidas Alcoholicas</h3>
            @foreach ($bebidas as $bebida)
            <div class="cuadro">
                <img src="{{ $bebida->image }}" alt="Producto">
                <p>Nombre: <span id="productName">{{ $bebida->nombre }}</span></p>
                <p>Precio: <span id="productPrice">{{ $bebida->precio }}</span></p>
                <p>Características: <span id="productFeatures">{{ $bebida->Descripción }}</span></p>
                <form action="{{ route('eliminar.producto', $bebida->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                </form>
                <button class="btn btn-info edit-btn" id="editBtn{{$producto->id}}">Editar</button>
                <div class="edit-form-container" style="display: none;">

                    <div class="form-group">
                        <label>Imagen:</label>
                        <input type="file" class="form-control-file" name="productImage">
                    </div>
                    <div class="form-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" class="form-control" name="productName" value="${currentName}">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="productPrice" value="${currentPrice}">
                    </div>
                    <div class="form-group">
                        <label>Características:</label>
                        <textarea class="form-control" name="productFeatures" value="${currentFeatures}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Disponible:</label>
                        <input type="number" class="form-control" name="productDisponible" value="${currentDisponible}">
                    </div>
                    <div class="button-container">
                        <button type="button" class="btn btn-success save-btn">Guardar</button>
                        <button type="button" class="btn btn-secondary cancel-btn">Cancelar</button>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="container-product">
                <h3>Hamburguesas</h3>
                @foreach ($hamburguesas as $hamburguesa)
                <div class="cuadro">
                    <img src="{{ $hamburguesa->image }}" alt="Producto">
                    <p>Nombre: <span id="productName">{{ $hamburguesa->nombre }}</span></p>
                    <p>Precio: <span id="productPrice">{{ $hamburguesa->precio }}</span></p>
                    <p>Características: <span id="productFeatures">{{ $hamburguesa->Descripción }}</span></p>
                    <!-- Formulario para eliminar el producto -->
                    <form action="{{ route('eliminar.producto', $hamburguesa->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn">Editar</button>
                </div>
                @endforeach
            </div>

            <div class="container-product">
                <h3>Helados</h3>
                @foreach ($helados as $helado)
                <div class="cuadro">
                    <img src="{{ $helado->image }}" alt="Producto">
                    <p>Nombre: <span id="productName">{{ $helado->nombre }}</span></p>
                    <p>Precio: <span id="productPrice">{{ $helado->precio }}</span></p>
                    <p>Características: <span id="productFeatures">{{ $helado->Descripción }}</span></p>
                    <!-- Formulario para eliminar el producto -->
                    <form action="{{ route('eliminar.producto', $helado->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn">Editar</button>
                </div>
                @endforeach
            </div>

            <div class="container-product">
                <h3>Comidas Rapidas</h3>
                @foreach ($comidas as $comida)
                <div class="cuadro">
                    <img src="{{ $comida->image }}" alt="Producto">
                    <p>Nombre: <span id="productName">{{ $comida->nombre }}</span></p>
                    <p>Precio: <span id="productPrice">{{ $comida->precio }}</span></p>
                    <p>Características: <span id="productFeatures">{{ $comida->Descripción }}</span></p>
                    <!-- Formulario para eliminar el producto -->
                    <form action="{{ route('eliminar.producto', $comida->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn">Editar</button>
                </div>
                @endforeach
            </div>

            <div class="container-product">
                <h3>Refrescos</h3>
                @foreach ($refrescos as $refresco)
                <div class="cuadro">
                    <img src="{{ $refresco->image }}" alt="Producto">
                    <p>Nombre: <span id="productName">{{ $refresco->nombre }}</span></p>
                    <p>Precio: <span id="productPrice">{{ $refresco->precio }}</span></p>
                    <p>Características: <span id="productFeatures">{{ $refresco->Descripción }}</span></p>
                    <!-- Formulario para eliminar el producto -->
                    <form action="{{ route('eliminar.producto', $refresco->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn">Editar</button>
                </div>
                @endforeach
            </div>

            <div class="container-product">
                <h3>Combos</h3>
                @foreach ($combos as $combo)
                <div class="cuadro">
                    <img src="{{ $combo->image }}" alt="Producto">
                    <p>Nombre: <span id="productName">{{ $combo->nombre }}</span></p>
                    <p>Precio: <span id="productPrice">{{ $combo->Precio }}</span></p>
                    <p>Características: <span id="productFeatures">{{ $combo->Descripción }}</span></p>
                    <!-- Formulario para eliminar el producto -->
                    <form action="{{ route('eliminar.producto', $combo->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn">Editar</button>
                </div>
                @endforeach
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="{{ asset('asset/js/editar-productos.js') }}"></script>
</body>
<script>
    window.setTimeout(function() {
        var flash = document.getElementById('flash-message');
        if (flash) flash.style.display = 'none';
    }, 2000);
</script>

</html>