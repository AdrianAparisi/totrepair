$(document).ready(function () {
    let offset = $('#product-list > div').length;
    let totalRepuestos = $('#total-products').data('total-products');
    $('#load-more').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: '/repuestos/data',
            type: 'GET',
            data: {
                totalRepuestos: totalRepuestos,
                offset: offset
            },
            success: function (data) {
                let repuestos = data.repuestos;
                let baseUrl = window.location.origin;
                repuestos.forEach(function (product) {
                    console.log(product.images[0].route)
                    // Se crea el div principal"
                    let productDiv = document.createElement('div');

                    // Se crea el div con la clase "single-product"
                    let singleProductDiv = document.createElement('div');
                    singleProductDiv.classList.add('single-product');

                    // Se crea el enlace para el producto
                    let enlace = document.createElement('a');
                    enlace.setAttribute('href', baseUrl + '/producto/' + product.id);
                    console.log(enlace)

                    // Se crea el div con la clase "img-content"
                    let imgContent = document.createElement('div');
                    imgContent.classList.add('img-content');

                    // Se crea el elemento de imagen con la ruta de la imagen principal
                    let img = document.createElement('img');
                    img.src = product.images[0].route;
                    img.alt = 'imagen_principal_' + product.name;
                    enlace.appendChild(img);


                    imgContent.appendChild(enlace);

                    // Se crea el div con la clase "text-content"
                    let textContent = document.createElement('div');
                    textContent.classList.add('text-content');

                    // Se crea el elemento de título con el nombre del producto
                    let title = document.createElement('h3');
                    title.classList.add('product-title');
                    title.textContent = product.name;
                    textContent.appendChild(title);

                    // Se crea el elemento de precio con el precio del producto
                    let price = document.createElement('h4');
                    price.classList.add('product-price');
                    price.textContent = product.price + ' €';
                    textContent.appendChild(price);

                    // Se agrega los elementos creados a "singleProductDiv"
                    singleProductDiv.appendChild(imgContent);
                    singleProductDiv.appendChild(textContent);

                    // Se agrega "singleProductDiv" a "productDiv"
                    productDiv.appendChild(singleProductDiv);

                    // Se agrega "productDiv" a "#product-list"
                    document.getElementById('product-list').appendChild(productDiv);
                });
                offset += repuestos.length;
                if (offset >= data.totalRepuestos) {
                    $('#load-more').hide();
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    });
});
