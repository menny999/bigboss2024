<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comprar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      color: #333;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    .producto {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .producto img {
      max-width: 100px;
      margin-right: 20px;
    }
    .producto p {
      margin: 0;
    }
    .total {
      font-size: 18px;
      font-weight: bold;
      text-align: right;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Productos en el Carrito</h1>
    <div id="lista-productos"></div>
    <div class="total" id="total"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
      const listaProductos = document.getElementById('lista-productos');
      let total = 0;

      carrito.forEach(producto => {
        const item = document.createElement('div');
        item.classList.add('producto');
        item.innerHTML = `<img src="${producto.imagen}" alt="${producto.nombre}"><p>${producto.nombre} - ${producto.precio}</p>`;
        listaProductos.appendChild(item);

        const precio = parseFloat(producto.precio.replace('MX $', '').replace(',', ''));
        total += precio;
      });

      document.getElementById('total').innerText = `Total: MX $${total.toFixed(2).toLocaleString()}`;
    });
  </script>
</body>
</html>
