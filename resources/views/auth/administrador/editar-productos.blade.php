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
            <div class="cuadro" data-id="{{ $bebida->id }}">
                <img src="{{ $bebida->image }}" alt="Producto" class="product-image">
                <p>Nombre: <span class="product-name">{{ $bebida->nombre }}</span></p>
                <p>Precio: <span class="product-price">{{ $bebida->precio }}</span></p>
                <p>Características: <span class="product-features">{{ $bebida->Descripción }}</span></p>
                <div class="btn-action">
                    <form action="{{ route('eliminar.producto', $bebida->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn" onclick="transformToEditForm(this)">Editar</button>
                </div>
            </div>
            <div id="editForm_{{ $bebida->id }}" class="formEdit" style="display: none;">
                <form action="{{ route('actualizar.producto', $bebida->id) }}" method="POST">

                    <div class="form-group">
                        <label>Imagen:</label>
                        <input type="text" class="form-control" name="productImage" value="{{ $bebida->image }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" class="form-control" name="productName" value="{{ $bebida->nombre }}">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="productPrice" value="{{ $bebida->precio }}">
                    </div>
                    <div class="form-group">
                        <label>Características:</label>
                        <textarea class="form-control" name="productFeatures">{{ $bebida->Descripción }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Disponible:</label>
                        <input type="number" class="form-control" name="productDisponible" value="{{ $bebida->Stock }}">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-success save-btn">Guardar</button>
                    <button type="button" class="btn btn-secondary cancel-btn" onclick="hideEditForm(this)">Cancelar</button>

                </form>
            </div>
            @endforeach
        </div>



        <div class="container-product">
            <h3>Hamburguesas</h3>
            @foreach ($hamburguesas as $hamburguesa)
                <div class="cuadro" data-id="{{ $hamburguesa->id }}">
                <img src="{{ $hamburguesa->image }}" alt="Producto" class="product-image">
                    <p>Nombre: <span class="product-name">{{ $hamburguesa->nombre }}</span></p>
                    <p>Precio: <span class="product-price">{{ $hamburguesa->precio }}</span></p>
                    <p>Características: <span class="product-features">{{ $hamburguesa->Descripción }}</span></p>
                    <div class="btn-action">
                    <form action="{{ route('eliminar.producto', $hamburguesa->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn" onclick="transformToEditForm(this)">Editar</button>
                </div>
                </div>
                <div id="editForm_{{ $hamburguesa->id }}" class="formEdit" style="display: none;">
                    <form action="{{ route('actualizar.producto', $hamburguesa->id) }}" method="POST">

                        <div class="form-group">
                            <label>Imagen:</label>
                            <input type="text" class="form-control" name="productImage"
                                value="{{ $hamburguesa->image }}">
                        </div>
                        <div class="form-group">
                            <label>Nombre del Producto:</label>
                            <input type="text" class="form-control" name="productName"
                                value="{{ $hamburguesa->nombre }}">
                        </div>
                        <div class="form-group">
                            <label>Precio:</label>
                            <input type="number" class="form-control" name="productPrice"
                                value="{{ $hamburguesa->precio }}">
                        </div>
                        <div class="form-group">
                            <label>Características:</label>
                            <textarea class="form-control" name="productFeatures">{{ $hamburguesa->Descripción }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Disponible:</label>
                            <input type="number" class="form-control" name="productDisponible"
                                value="{{ $hamburguesa->Stock }}">
                        </div>

                        @csrf
                        <button type="submit" class="btn btn-success save-btn">Guardar</button>
                        <button type="button" class="btn btn-secondary cancel-btn"
                            onclick="hideEditForm(this)">Cancelar</button>

                    </form>
                </div>
            @endforeach
        </div>

        <div class="container-product">
            <h3>Helados</h3>
            @foreach ($helados as $helado)
            <div class="cuadro" data-id="{{ $helado->id }}">
                <img src="{{ $helado->image }}" alt="Producto" class="product-image">
                <p>Nombre: <span class="product-name">{{ $helado->nombre }}</span></p>
                <p>Precio: <span class="product-price">{{ $helado->precio }}</span></p>
                <p>Características: <span class="product-features">{{ $helado->Descripción }}</span></p>
                <div class="btn-action">
                    <form action="{{ route('eliminar.producto', $helado->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn" onclick="transformToEditForm(this)">Editar</button>
                </div>
            </div>
            <div id="editForm_{{ $helado->id }}" class="formEdit" style="display: none;">
                <form action="{{ route('actualizar.producto', $helado->id) }}" method="POST">

                    <div class="form-group">
                        <label>Imagen:</label>
                        <input type="text" class="form-control" name="productImage" value="{{ $helado->image }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" class="form-control" name="productName" value="{{ $helado->nombre }}">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="productPrice" value="{{ $helado->precio }}">
                    </div>
                    <div class="form-group">
                        <label>Características:</label>
                        <textarea class="form-control" name="productFeatures">{{ $helado->Descripción }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Disponible:</label>
                        <input type="number" class="form-control" name="productDisponible" value="{{ $helado->Stock }}">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-success save-btn">Guardar</button>
                    <button type="button" class="btn btn-secondary cancel-btn" onclick="hideEditForm(this)">Cancelar</button>

                </form>
            </div>
            @endforeach
        </div>


        <div class="container-product">
            <h3>Comidas Rápidas</h3>
            @foreach ($comidas as $comida)
            <div class="cuadro" data-id="{{ $comida->id }}">
                <img src="{{ $comida->image }}" alt="Producto" class="product-image">
                <p>Nombre: <span class="product-name">{{ $comida->nombre }}</span></p>
                <p>Precio: <span class="product-price">{{ $comida->precio }}</span></p>
                <p>Características: <span class="product-features">{{ $comida->Descripción }}</span></p>
                <div class="btn-action">
                    <form action="{{ route('eliminar.producto', $comida->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn" onclick="transformToEditForm(this)">Editar</button>
                </div>
            </div>
            <div id="editForm_{{ $comida->id }}" class="formEdit" style="display: none;">
                <form action="{{ route('actualizar.producto', $comida->id) }}" method="POST">

                    <div class="form-group">
                        <label>Imagen:</label>
                        <input type="text" class="form-control" name="productImage" value="{{ $comida->image }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" class="form-control" name="productName" value="{{ $comida->nombre }}">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="productPrice" value="{{ $comida->precio }}">
                    </div>
                    <div class="form-group">
                        <label>Características:</label>
                        <textarea class="form-control" name="productFeatures">{{ $comida->Descripción }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Disponible:</label>
                        <input type="number" class="form-control" name="productDisponible" value="{{ $comida->Stock }}">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-success save-btn">Guardar</button>
                    <button type="button" class="btn btn-secondary cancel-btn" onclick="hideEditForm(this)">Cancelar</button>

                </form>
            </div>
            @endforeach
        </div>


        <div class="container-product">
            <h3>Refrescos</h3>
            @foreach ($refrescos as $refresco)
            <div class="cuadro" data-id="{{ $refresco->id }}">
                <img src="{{ $refresco->image }}" alt="Producto" class="product-image">
                <p>Nombre: <span class="product-name">{{ $refresco->nombre }}</span></p>
                <p>Precio: <span class="product-price">{{ $refresco->precio }}</span></p>
                <p>Características: <span class="product-features">{{ $refresco->Descripción }}</span></p>
                <div class="btn-action">
                    <form action="{{ route('eliminar.producto', $refresco->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn" onclick="transformToEditForm(this)">Editar</button>
                </div>
            </div>
            <div id="editForm_{{ $refresco->id }}" class="formEdit" style="display: none;">
                <form action="{{ route('actualizar.producto', $refresco->id) }}" method="POST">

                    <div class="form-group">
                        <label for="productImage">Imagen:</label>
                        <input type="text" class="form-control-file" name="productImage" value="{{ $refresco->image }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" class="form-control" name="productName" value="{{ $refresco->nombre }}">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="productPrice" value="{{ $refresco->precio }}">
                    </div>
                    <div class="form-group">
                        <label>Características:</label>
                        <textarea class="form-control" name="productFeatures">{{ $refresco->Descripción }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Disponible:</label>
                        <input type="number" class="form-control" name="productDisponible" value="{{ $refresco->Stock }}">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-success save-btn">Guardar</button>
                    <button type="button" class="btn btn-secondary cancel-btn" onclick="hideEditForm(this)">Cancelar</button>
                </form>
            </div>
            @endforeach
        </div>


        <div class="container-product">
            <h3>Combos</h3>
            @foreach ($combos as $combo)
            <div class="cuadro" data-id="{{ $combo->id }}">
                <img src="{{ $combo->image }}" alt="Producto" class="product-image">
                <p>Nombre: <span class="product-name">{{ $combo->nombre }}</span></p>
                <p>Precio: <span class="product-price">{{ $combo->Precio }}</span></p>
                <p>Características: <span class="product-features">{{ $combo->Descripción }}</span></p>
                <div class="btn-action">
                    <form action="{{ route('eliminar.producto', $combo->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Eliminar</button>
                    </form>
                    <button class="btn btn-info edit-btn" onclick="transformToEditForm(this)">Editar</button>
                </div>
            </div>
            <div id="editForm_{{ $combo->id }}" class="formEdit" style="display: none;">
                <form action="{{ route('actualizar.producto', $combo->id) }}" method="POST">

                    <div class="form-group">
                        <label for="productImage">Imagen:</label>
                        <input type="text" class="form-control-file" name="productImage" value="{{ $combo->image }}">
                    </div>
                    <div class="form-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" class="form-control" name="productName" value="{{ $combo->nombre }}">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="productPrice" value="{{ $combo->Precio }}">
                    </div>
                    <div class="form-group">
                        <label>Características:</label>
                        <textarea class="form-control" name="productFeatures">{{ $combo->Descripción }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Disponible:</label>
                        <input type="number" class="form-control" name="productDisponible" value="{{ $combo->Stock }}">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-success save-btn">Guardar</button>
                    <button type="button" class="btn btn-secondary cancel-btn" onclick="hideEditForm(this)">Cancelar</button>
                </form>
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
