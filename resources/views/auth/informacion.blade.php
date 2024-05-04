<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/info.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Icon/logo.png') }}" type="image/x-icon">
    <title>Página de la Empresa</title>
</head>

<body>

    <div class="toolbar">
        <div class="menu" onclick="toggleDropdown()">
            <div class="dropdown" id="dropdownMenu" style="display: none;">
                <!-- Elementos del menú -->
                <a href="/bebidas-alcoholicas">Bebidas Alcoholicas</a>
                <a href="/hamburguesas">Hamburguesas</a>
                <a href="/heladeria">Heladeria</a>
                <a href="/comidas-rapidas">Comidas Rapidas</a>
                <a href="/bebidas">Bebidas</a>
                <a href="/combos">Combos</a>
            </div>
        </div>

        <div class="botonera">
            <a>
                <div class="boton_toolbar1" onclick="toggleSearchBar()"></div>
                <input type="text" id="searchBar" class="barraBusqueda" placeholder="Buscar..." style="display: none;">
            </a>
            <a href="/dashboard">
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar3"></div>
            </a>
            <a href="/lista-pedidos">
                <div class="boton_toolbar4"></div>
            </a>

            <!--nombre de usuario registrado (perfil)  -->
            <a>
                <div class="usuario">usuario</div>
            </a>

        </div>
    </div>

    <h1 class="Titulo">Preguntas Frecuentes</h1>

    <div class="glass">
        <h2 class="sub_titulo">Misión</h2>
        <p>La Ulloa se distingue por su compromiso con la excelencia culinaria y la sostenibilidad. Al ofrecer comidas
            rápidas que no comprometen la calidad, helados artesanales elaborados con pasión y vinos seleccionados con
            esmero, La Ulloa se convierte en un destino gastronómico que celebra los sabores locales. El respeto por los
            clientes, la comunidad y el medio ambiente está en el corazón de cada decisión, asegurando que cada visita
            sea una experiencia memorable y responsable.</p>

        <h2 class="sub_titulo2">Visión</h2>
        <p>Nuestra visión es ser el destino gastronómico líder en La Ulloa, destacados por nuestra excelencia en calidad
            y servicio. Nos esforzamos por ser innovadores en nuestra oferta culinaria, promover la sostenibilidad y
            contribuir al desarrollo de nuestra comunidad. Queremos crear momentos inolvidables para nuestros clientes,
            siendo reconocidos por nuestra pasión por la comida de calidad y la hospitalidad genuina.</p>

        <h2 class="sub_titulo3">Terminos y Condiciones</h2>
        <p><span>Envío y Entrega</span></p>
        <ol>
            <li>Nos comprometemos a enviar los productos solicitados dentro del plazo especificado en el momento de la
                compra, siempre que sea posible. Los tiempos de entrega pueden variar según la ubicación del cliente y
                la disponibilidad de los productos. Haremos nuestro mejor esfuerzo para mantener a nuestros clientes
                informados sobre cualquier retraso en la entrega.</li>
        </ol>
        <p>
        <p><span>Costos de Envío:</span></p>
        <ol start="2">
            <li>Los costos de envío se calcularán y mostrarán durante el proceso de pago. Estos costos pueden variar
                según el peso, tamaño y ubicación del envío. Es posible que ofrezcamos envío gratuito en pedidos
                superiores a un cierto monto o como parte de promociones especiales.</li>
        </ol>
        <p>
        <p><span>Dirección de Envío:</span></p>
        <ol start="3">
            <li>Los clientes son responsables de proporcionar una dirección de envío precisa y completa al realizar su
                pedido. No nos hacemos responsables de los retrasos o problemas de entrega causados por direcciones
                incorrectas o incompletas.
            </li>
        </ol>
        <p>
        <p><span>Recibo de Productos:</span></p>
        <ol start="4">
            <li>Los clientes son responsables de proporcionar una dirección de envío precisa y completa al realizar su
                pedido. No nos hacemos responsables de los retrasos o problemas de entrega causados por direcciones
                incorrectas o incompletas.
            </li>
        </ol>
        <p>

        <p><span>Devoluciones y Reembolsos:</span></p>
        <ol start="5">
            <li>Consulte nuestra política de devoluciones y reembolsos para obtener información detallada sobre cómo
                procesar devoluciones y solicitar reembolsos por productos enviados.
            </li>
        </ol>
        <p>

        <p><span>Riesgo de Pérdida o Daño:</span></p>
        <ol start="6">
            <li>Una vez que los productos hayan sido entregados a la compañía de transporte, el riesgo de pérdida o daño
                de los mismos pasa al cliente.
                Embalaremos cuidadosamente los productos para minimizar el riesgo de daños durante el transporte.
            </li>
        </ol>
        <p>

        <p><span>Restricciones de Envío:</span></p>
        <ol start="7">
            <li>Es posible que haya restricciones de envío para ciertos productos debido a regulaciones locales o
                internacionales. Nos reservamos el derecho de restringir el envío de ciertos productos a ciertas
                ubicaciones.
            </li>
        </ol>
        <p>

        <p><span>Cambios en los Términos:</span></p>
        <ol start="8">
            <li>Nos reservamos el derecho de realizar cambios en estos términos y condiciones en cualquier momento. Los
                cambios entrarán en vigencia inmediatamente después de su publicación en nuestra plataforma.
            </li>
        </ol>
        <p>

        <p><span>Contacto:</span></p>
        <ol start="9">
            <li>Si tienes alguna pregunta o inquietud sobre nuestros términos y condiciones de envío, no dudes en
                ponerte en contacto con nuestro equipo de atención al cliente.
            </li>
        </ol>
        <p>
    </div>
    <div class="footer">
        <div class="Titulo_f"> Redes Sociales</div>
        <div class="Social">
            <a href="https://api.whatsapp.com/send?phone=3134774134" target="_blank" rel="noopener noreferrer">
                <div class="Red Red-whatsaap"></div>
            </a>
            <a href="https://www.instagram.com/laguadalupana.ulloa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                target="_blank" rel="noopener noreferrer">
                <div class="Red Red-instagram"></div>
            </a>
            <a href="https://web.facebook.com/people/La-Guadalupana-Ulloa/100088166905257/?_rdc=1&_rdr">
                <div class="Red Red-facebook"></div><a>
                    <div class="Red Red-email"></div>
        </div>
        <div class="Info">
            <p>Ubicación: Av. Ejemplo, Ciudad Ejemplo</p>
            <p>Dirección: Calle Ejemplo #123</p>
            <p>Teléfono: +123456789</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                molestie mi sodales. Integer et magna quis arcu interdum malesuada.</p>
        </div>
    </div>
    <script src="{{ asset('asset/js/home.js') }}"></script>
</body>

</html>
