@extends('layouts.layout')

@section('titulo', 'Términos y Condiciones')

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

        <h1>Términos y condiciones</h1>

        <p>Esta página web es propiedad y está operado por ToTRepair. Estos Términos establecen los términos y
            condiciones
            bajo los cuales tu puedes usar nuestra página web y servicios ofrecidos por nosotros. Esta página web
            ofrece a
            los visitantes navegar por las diferentes secciones, ver diferentes productos de nuestra web, poder
            comprar
            diferentes productos. Al acceder o usar la página web de nuestro servicio, usted aprueba que haya leído,
            entendido y aceptado estar sujeto a estos Términos:</p>

        <article>

            <h2>1.Obligación del usuario</h2>

            <p>Para usar nuestro página web y / o recibir nuestros servicios, debes tener al menos 18 años de edad,
                o la mayoría
                de edad legal en tu jurisdicción, y poseer la autoridad legal, el derecho y la libertad para
                participar en estos
                Términos como un acuerdo vinculante. No tienes permitido utilizar esta página web y / o recibir
                servicios si
                hacerlo está prohibido en tu país o en virtud de cualquier ley o regulación aplicable a tu caso.</p>

            <p>El usuario se obliga a no difamar, almacenar, difundir desde la página web o en la página web
                contenido, material
                o información de carácter pornográfico, amenazador, xenófobo, violento, que atenten contra la raza,
                sexo,
                religión y/o ideología o contra la moral, el orden público y los derechos fundamentales, así como,
                contra las
                libertades públicas, el honor, la intimidad.</p>

            <p>El usuario se compromete a custodiar la contraseña identificativa para hacer uso de los servicios
                dispuestos en
                la página web, y se compromete a no ceder su uso a terceros, asumiendo personalmente la
                responsabilidad por
                cualquier perjuicio derivado por el uso indebido de la contraseña o el uso de la página web.</p>

        </article>

        <article>

            <h2>2.Precios e información del producto</h2>

            <p>Al comprar un artículo, aceptas que: (i) eres responsable de leer el listado completo del artículo
                antes de
                comprometerte a comprarlo: (ii) celebras un contrato legalmente vinculante para comprar un artículo
                cuando te
                comprometes a comprar un artículo y completar el proceso de check-out.</p>

            <p>Los precios que cobramos por usar nuestros productos se enumeran en la página web. Nos reservamos el
                derecho de
                cambiar nuestros precios para los productos que se muestran en cualquier momento y de corregir los
                errores de
                precios que pueden ocurrir inadvertidamente. </p>

            <p>La tarifa por los servicios y cualquier otro cargo que pueda incurrir en relación con tu uso del
                servicio, como
                los impuestos y las posibles tarifas de transacción, se cobrarán mensualmente a tu método de pago.
            </p>

        </article>

        <article>

            <h2>3.Política de devoluciones y reembolsos</h2>

            <p>Para cualquier producto no dañado, simplemente devuélvelo con los accesorios y el paquete incluidos
                junto con el
                recibo original dentro de los 14 días posteriores a la fecha que recibiste el producto, y lo
                cambiaremos o te
                ofreceremos un reembolso basado en el método de pago original. Además, ten en cuenta lo siguiente:
                (i) Los
                productos solo se pueden devolver en el país en el que se compraron originalmente.</p>

        </article>

        <article>

            <h2>4.Disponibilidad</h2>

            <p>ToTRepair hará todo lo posible por complacer a todos sus clientes en la demanda de los productos.</p>

            <p>En caso de indisponibilidad del producto después de haberse realizado el pedido el cliente será
                informado por
                correo electrónico de la anulación de este pedido.</p>

            <p>A raíz de esta demanda, la rapidez de la devolución en la cuenta bancaria del cliente dependerá del
                tipo de
                tarjeta bancaria y de las condiciones de cada entidad bancaria.</p>

        </article>

        <article>

            <h2>5.Pago</h2>

            <p>El precio por los diferentes productos que el usuario pueda comprar, aparecerá siempre en euros e
                incluye los
                impuestos correspondientes. Los gastos de envío se incluirán en el precio final, al finalizar la
                compra se
                informará al usuario sobre cada uno de los costes de forma desglosada.</p>

            <p>Las compras se podrán efectuar mediante tarjeta bancaria (crédito y débito, VISA, MasterCard o
                American Express),
                PayPal, Amazon Pay, Apple Pay, Klarna y contra reembolso.</p>

            <p>Al realizar una compra en ToTRepair estás aceptando los términos y condiciones y política de privacidad
                de nuestra
                web.</p>

            <p>Las tarjetas bancarias aceptadas son: Visa, MasterCard y American Express. El precio de compra se
                cargará en
                cuenta bancaria del cliente, en el plazo de 1 día a contar desde el día del pedido y ésta se dará
                por efectiva
                después de confirmación de su acuerdo de los centros de pago bancario.</p>

            <p>En el caso seleccionar la modalidad de pago contra-reembolso se deberán añadir 3€ de coste adicional.
                El cliente
                deberá abonar el coste de su pedido, junto con estos 3€ adicionales, al transportista para poder
                recibir la
                entrega.</p>

            <p>Una vez realizado el pago, recibirás por parte de ToTRepair un correo electrónico, en tu cuenta de
                email asignada a
                tal efecto, informando que la compra y el pago se han realizado correctamente.</p>

        </article>

        <article>

            <h2>6.Envío y Entrega de la Compra</h2>

            <p>Los envíos se realizan dentro de la UE. El usuario podrá comprobar si su dirección postal está dentro
                de las
                zonas de envío o reparto de ToTRepair, al momento de incluir sus datos (dirección de envío) en el
                formulario de
                compra. </p>

            <p>En todo caso, el usuario podrá consultar las tarifas de gastos de envíos aquí.</p>

            <p>El proveedor enviará los productos al almacén de distribución, desde donde saldrán los productos cuyo
                destino
                final será la dirección que el comprador establezca. Cada vez que se vaya a enviar un pedido, el
                comprador
                recibirá un correo electrónico en el que le informarán de la salida de almacén de su mercancía.</p>

            <p>Los gastos de transporte serán a cuenta del comprador.</p>

            <p>La entrega puede realizarse durante todo el día, de lunes a viernes, de 8 a 21h.</p>

            <p>Para entregas con horarios específicos, como antes de las 10h o de las 14h, pueden existir
                suplementos.</p>

            <p>Los plazos estimados de entrega anunciados en la web pueden sufrir alteraciones debido a causas
                ajenas a ToTRepair,
                y en ningún caso son fechas vinculantes o garantizadas.</p>

            <p>El pedido de compra que corresponde al pedido estará disponible en ToTRepair, una vez que se confirme
                el pago, que
                podrá visualizarse mediante el vínculo: "Mis Pedidos", a partir de la emisión del correo
                electrónico. Este
                pedido de compra original incluye los gastos de entrega y el IVA.</p>

            <p>ToTRepair pedirá a sus clientes que elija el lugar de la entrega, debiendo especificar su domicilio,
                oficina o
                centro donde quieren que se le entregue el producto, donde lo recibirá en un plazo que dependerá de
                la
                disponibilidad del producto, así como de la agencia de transportes.</p>

            <p>Cada entrega se considera efectuada a partir de la puesta a disposición del producto al cliente por
                parte del
                transportista, materializado por el sistema de control utilizado por el transportista. Corresponde
                al
                destinatario comprobar el pedido en el momento de la entrega y hacer entonces todas las reservas y
                reclamaciones
                que aparecieran justificadas, incluso tiene la posibilidad de rechazar el paquete, si éste hubiera
                sido abierto
                o si tiene indicios manifiestos de deterioro.</p>

        </article>

        <article>

            <h2>7.Seguridad</h2>

            <p>Los datos bancarios introducidos por el usuario son encriptados y transmitidos de forma segura a los
                servidores
                de las pasarelas de pago y, posteriormente, son verificados con el banco emisor para evitar posibles
                fraudes y
                abusos.</p>

            <p>Este procedimiento de introducción de datos está garantizado por la tecnología de encriptación SSL
                (Secure
                Sockets Layer) de 256 bits, uno de los sistemas de protección más avanzados y eficaces actualmente
                disponibles,
                gracias al cual, ningún tercero tendrá acceso vía Internet a esta información relativa a los datos
                bancarios
                introducidos por el cliente.</p>

            <p>Solo las pasarelas de pago mencionadas anteriormente tienen acceso a los datos bancarios vinculados a
                estos
                medios de pago, ToTRepair no tiene acceso a ellos en ningún momento.</p>

        </article>

        <article>

            <h2>8.Garantía</h2>

            <p>Las garantías y servicios postventa se regirán por el Real Decreto Legislativo 1/2007 de 16 de
                noviembre que
                aprueba el texto de la Ley General para la Defensa de los Consumidores y Usuarios. Antes de realizar
                cualquier
                devolución debe ponerse en contacto con ToTRepair a través de correo electrónico totrepair@gmail.com
                indicando su
                nº de pedido. En caso de que algún artículo no funcione correctamente o presente algún defecto podrá
                ser
                cambiado por otro igual o equivalente.</p>

            <p>El plazo de garantía de los productos será de 2 años desde la fecha de compra.</p>

            <p>Los gastos de devolución en garantía, serán gratuitos para el usuario. Dicha gratuidad comprenderá
                los gastos de
                envío, así como los costes relacionados con la mano de obra y los materiales.</p>

            <p>No se incluyen en la garantía las deficiencias ocasionadas por negligencias, golpes, uso o
                manipulaciones
                indebidas, tensión no idónea, instalación incorrecta, ni materiales sometidos a desgaste por su uso
                normal.
                Tampoco se incluyen en la garantía defectos por no seguir las instrucciones indicadas en la página
                web de cada
                producto o en las instrucciones básicas de funcionamiento que el producto incluye en el momento de
                la entrega.
            </p>

            <p>El consumidor debe informar a ToTRepair en el plazo de dos meses desde que tuvo conocimiento de la no
                conformidad
                del producto siendo responsable el consumidor de los daños o perjuicios efectivamente ocasionados
                por el retraso
                en la comunicación.</p>

        </article>

    </section>
@endsection

</section>
