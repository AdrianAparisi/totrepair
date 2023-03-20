@extends('layouts.layout')

@section('titulo', 'Política de privacidad')

@section('head')


    {{-- Estilos de header, footer y el js para menú hamburguesa y slider --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/policy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- Librerias de JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/products.js') }}"></script>
@endsection

@section('contenido')
    <section>
        <h1>Política de Privacidad</h1>

        <p>En ToTRepair nos comprometemos al 100% en proteger la privacidad y la seguridad de nuestros usuarios y
            clientes.
            Las personas que formamos parte del equipo de ToTRepair también somos usuarios y clientes de otros sitios
            web, así
            que valoramos y respetamos la importancia que se merece la privacidad de los datos personales.</p>

        <p>Por eso siempre seremos claros y transparentes sobre la información que estamos obteniendo, y sobre lo
            que
            haremos con esa información.</p>

        <article>

            <h2>1.Responsable del tratamiento de datos</h2>

            <h3>ToTRepair Digital</h3>

            <p>Sociedad española que actúa en IES José Rodrigo Botet nº 1, 46940 Manises</p>
            <p>Correo electrónico de contacto: totrepair@gmail.com</p>

        </article>

        <article>

            <h2>2.Tu información y tus derechos</h2>

            <p>Tu información es sólo tuya. Y como tal, tienes muchos derechos relacionados con tu información
                personal:</p>
            <ul>
                <li>El derecho a ser informado sobre cómo se utiliza tu información personal (como ahora mismo
                    leyendo estas
                    palabras).</li>
                <li>El derecho a acceder a la información personal que disponemos sobre ti.</li>
                <li>El derecho a solicitar el borrado de tus datos, o a interrumpir su procesamiento o recopilación,
                    en algunos
                    casos.</li>
                <li>El derecho a solicitar que transfiramos elementos de tus datos tanto a ti como a otros
                    proveedores de
                    servicios.</li>
                <li>El derecho a interponer una queja al organismo regulador sobre la protección de datos (como la
                    Agencia
                    Española de Protección de Datos).</li>
            </ul>

        </article>

        <article>

            <h2>3.Qué datos recopilamos y tratamos</h2>

            <p>En ToTRepair sólo recopilamos y tratamos los datos que tú nos facilitas de forma voluntaria. Y es que
                no tienes por
                qué darnos ningún tipo de información personal.</p>

            <p>Asimismo, recuerda que el suministro de datos personales requiere una edad mínima de 18 años o, en su
                caso,
                disponer de capacidad jurídica suficiente para contratar.</p>

            <p>En cuanto a los datos que podemos recopilar y tratar sobre ti, se encuentran:</p>
            <ul>
                <li>Datos de carácter identificativo: tu nombre, domicilio y datos de contacto Esta información
                    incluye tu
                    dirección de correo electrónico o e-mail, tu teléfono móvil, la dirección postal de facturación
                    y la
                    dirección postal de envío. Esta información es básica para, por ejemplo, poder enviarte tus
                    pedidos, poder
                    informarte del estado de los mismos, poder enviarte tu factura/recibo de compra, poder
                    notificarte de
                    cualquier incidencia relacionada con tus pedidos o poder solicitarte información adicional en
                    caso de no
                    estar completa para poder tramitar tu compra. Los canales que utilizaremos para poder
                    notificarte en caso
                    que sea necesario son el e-mail, el SMS o el WhatsApp. Si no deseas ser contactado por alguno de
                    estos
                    medios, por favor, contacta con nosotros antes de realizar tu compra.</li>

                <li>Información técnica: Esta información incluye detalles técnicos sobre el/los dispositivo/s que
                    utilizas para
                    visitar nuestra página web (tipo de dispositivo, dirección IP, tamaño de la pantalla, páginas
                    vistas, página
                    de origen, tiempo en página…) y datos de cómo utilizas nuestra página web. Esta información es
                    básica para
                    poder proteger nuestra página web (y por ende, tus datos personales), así como para poder
                    mejorar nuestra
                    página y adaptar la configuración de la misma a tus preferencias y comodidad.</li>

                <li>Tu información de pago: No te preocupes, por tu seguridad, ni almacenamos en nuestros servidores
                    ni tenemos
                    acceso al número completo de tu tarjeta de débito/crédito (sólo a los últimos 4 dígitos), ni
                    mucho menos al
                    código de verificación CVV de la misma. En cuanto a otros métodos de pago alternativos como
                    PayPal, Amazon
                    Pay, Apple Pay o Klarna, sólo disponemos del e-mail vinculado con el que se ha realizado el
                    pago, nada más.
                    Esta información es indispensable para poder cobrar los pagos, realizar reembolsos y prevenir o
                    detectar
                    posibles fraudes con tarjetas sustraídas o extraviadas.</li>

                <li>Tu historial de compras: Mantenemos un histórico de tu historial de compras con nosotros para
                    poder
                    ofrecerte la mejor atención al cliente, asistencia en caso de incidencias, gestionar los
                    reembolsos o las
                    devoluciones, o sugerirte productos que puedan resultarte interesantes (siempre con autorización
                    explícita
                    por tu parte).</li>

                <li> Tu historial de contacto con nosotros: Mantenemos un histórico de tu historial de contactos con
                    nosotros,
                    ya sea vía e-mail, SMS, WhatsApp o Chat, para poder ofrecerte la mejor atención al cliente
                    posible, así como
                    para formar a nuestros equipos.</li>

                <li>Tu valoración de nuestros productos: Cuando dejas una valoración acerca de uno de nuestros
                    productos la
                    almacenamos para poderla mostrar a los usuarios/clientes que puedan estar interesados en dicho
                    producto. En
                    este caso únicamente recopilamos tu nombre, tu e-mail, tu puntuación de nuestro producto y tus
                    comentarios
                    sobre el mismo. Tu e-mail nunca se mostrará en la página. Si lo deseas puedes inventarte un
                    nickname o
                    solicitar que la valoración sea anónima al momento de publicarla.</li>

                <li>Información que nos facilitas para ser VIP: Esto es, datos de carácter identificativo: nombre,
                    apellido,
                    correo electrónico y contraseña.</li>
            </ul>

        </article>

        <article>

            <h2>4.La legitimación para el tratamiento de tus datos</h2>
            <ul>
                <li>El interés legítimo: Para realizar las comprobaciones necesarias para detectar y prevenir
                    posibles fraudes,
                    así como para atender a tus solicitudes o consultas y prestar el servicio adecuado</li>

                <li>Ejecución de la relación contractual y/o precontractual: Tus datos son necesarios para la
                    ejecución de los
                    servicios que has contratado, así como para gestionar tus compras, entregas de pedidos y
                    posibles
                    incidencias.</li>
            </ul>

        </article>

        <article>

            <h2>5.Cuánto tiempo se conservan tus datos</h2>

            <p>No conservaremos tus datos durante más tiempo del estrictamente necesario para cumplir los fines por
                los que se
                están tratando. ‌Para determinar el período apropiado de conservación de tus datos, tendremos en
                cuenta la
                cantidad, la naturaleza y la confidencialidad de tus datos personales, los fines por los que los
                tratamos y si
                podemos lograr esos fines a través de otros medios.</p>

            <p>En general, para los clientes que hayan realizado una compra, el período mínimo de conservación de
                sus datos en
                nuestros sistemas será de 2 años, coincidiendo con los 2 años de garantía de nuestros productos en
                virtud de la
                normativa Europea de garantías al consumidor. De esta forma, y si se cumplen las condiciones
                necesarias,
                podremos ofrecerte un reemplazo o un reembolso sin coste siempre que sea necesario.</p>

            <p>Cuando ya no necesitemos usar tus datos personales, los eliminaremos de nuestros sistemas y registros
                o se
                anonimizarán para que ya no podamos identificarlos.</p>

        </article>

        <article>

            <h2>6.Con quién se comparten tus datos</h2>

            <p>Nunca compartiremos tus datos personales a terceros. Queremos mantener tu confianza, y creemos que
                esto es
                absolutamente básico para tal fin.</p>

            <p>Dicho esto, y para poder prestarte el mejor servicio y la mejor experiencia posibles necesitamos la
                ayuda de los
                mejores proveedores, y por ello nos parece fundamental compartir algunos de tus datos con los
                siguientes tipos
                de empresas:</p>
            <ul>
                <li>Empresas que desarrollan actividades para que te lleguen tus compras, como proveedores de
                    servicios de pago,
                    almacenes, empaquetadores de pedidos y empresas de transporte. Por ejemplo, Stripe, Klarna,
                    AmazonPay,
                    Correos, Correos Express, Sending o DHL, entre otras.</li>

                <li>Empresas que desarrollan actividades técnicas para la sustentación y acceso de esta página o de
                    cualquiera
                    de las funcionalidades de la misma.</li>

                <li>Empresas que desarrollan actividades de recopilación de valoraciones u opiniones de los usuarios
                    de forma
                    independiente.</li>

                <li>Proveedores de servicios profesionales, como agencias de marketing, socios publicitarios y
                    empresas de
                    alojamiento y programas de afiliados que nos ayudan a dirigir nuestro negocio. Por ejemplo,
                    Google, Awin o
                    Refersion, entre otras.</li>

                <li>Empresas de IT, así como otros proveedores de la plataforma que prestan servicios de
                    mantenimiento, base de
                    datos y herramientas de envío de newsletters y/o información comercial.</li>

                <li>Agencias de referencia de crédito, organismos de seguridad y organismos de prevención del fraude
                    para que
                    podamos atajar el fraude.</li>

                <li>Redes sociales que nos ayudan a realizar audiencias personalizadas a partir de archivos de datos
                    personales,
                    permitiendo crear una audiencia personalizada para nuestras campañas publicitarias. Por ejemplo,
                    Facebook e
                    Instagram.</li>
            </ul>

        </article>

        <article>

            <h2>7.Datos personales protegidos</h2>

            <p>La seguridad de tus datos es nuestra obsesión. Por eso, seguimos estrictos procedimientos de
                seguridad a la hora
                de almacenar o compartir tus datos personales, así como para protegerlos de pérdidas accidentales,
                daños o su
                destrucción. Todos los datos que nos proporcionas están protegidos con tecnología de cifrado SSL de
                256-bits.
            </p>

            <p>Podemos compartir tu información con terceros de confianza para los fines estipulados en esta
                política de
                privacidad, pero exigimos que todos los terceros tengan implementadas las medidas de seguridad
                técnicas y
                operativas apropiadas para proteger tus datos personales, de acuerdo con las leyes de protección de
                datos de
                España y de la Unión Europea.</p>

        </article>

    </section>
@endsection

</section>
