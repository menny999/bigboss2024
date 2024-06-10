<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por tu compra</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #808080;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background: rgb(219, 219, 219);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .thank-you-icon {
            font-size: 3rem;
            color: #28a745;
            text-align: center;
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #000000;
            text-align: center;
        }
        .order-details {
            margin-top: 20px;
            font-size: 1rem;
        }
        .order-details strong {
            display: inline-block;
            width: 150px;
        }
        .total {
            font-size: 1.2rem;
            font-weight: bold;
            color: #ff0000;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .btn-custom {
            margin-top: 20px;
            color: #fff;
            background-color: #000000;
            border-color: #808080;
        }
        .btn-custom:hover {
            color: #fff;
            background-color: #000000;
            border-color: #808080;
        }
        .btn-link-custom {
            color: #ffffff;
            text-decoration: none;
        }
        .btn-link-custom:hover {
            color: #ff0000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container text-center" id="content">
        <div class="thank-you-icon">
            <span>&#10003;</span>
        </div>
        <h1>¡Gracias por tu compra!</h1>
        <p>¡Felicidades por tu nueva adquisición de la colección de Big Bos Boutique!</p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recibir y mostrar los datos del formulario
            $subtotal = isset($_POST['subtotal']) ? $_POST['subtotal'] : '';
            $totalProductos = isset($_POST['total_productos']) ? (int)$_POST['total_productos'] : 0;
            $productos = '';

            if ($totalProductos > 2) {
                $productos .= '<ul>';
                for ($i = 1; $i <= $totalProductos; $i++) {
                    $productos .= '<li>' . htmlspecialchars($_POST['nombre'.$i]) . '</li>';
                }
                $productos .= '</ul>';
            } else {
                for ($i = 1; $i <= $totalProductos; $i++) {
                    $productos .= htmlspecialchars($_POST['nombre'.$i]) . '<br>';
                }
            }

            // Obtener la fecha y hora actuales
            date_default_timezone_set('America/Mexico_City'); // Cambiar al timezone de tu preferencia
            $fechaActual = date('d/m/Y');
            $horaActual = date('H:i:s');

            echo '<div class="order-details text-left">';
            echo '<p><strong>Productos:</strong> ' . $productos . '</p>';
            echo '<p><strong>Total:</strong> MX $' . htmlspecialchars($subtotal) . '</p>';
            echo '<p><strong>Fecha:</strong> ' . htmlspecialchars($fechaActual) . '</p>';
            echo '<p><strong>Hora:</strong> ' . htmlspecialchars($horaActual) . '</p>';
            echo '</div>';
        } else {
            echo '<p>No se recibieron datos válidos.</p>';
        }
        ?>
        <div class="d-flex justify-content-center">
            <button class="btn btn-custom mx-2" onclick="shareContent()">Compartir</button>
            <button id="save-pdf" class="btn btn-custom mx-2">Guardar en PDF</button>
            <a href="index.php" class="btn btn-custom mx-2 btn-link-custom">Volver a la tienda</a>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Big Bos Boutique. Todos los derechos reservados.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('save-pdf').addEventListener('click', function () {
            const element = document.getElementById('content');
            html2pdf(element, {
                margin: 1,
                filename: 'gracias_por_tu_compra.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            });
        });

        function shareContent() {
            const text = "¡Gracias por tu compra en Big Bos Boutique!";
            const url = window.location.href;
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    text: text,
                    url: url
                }).then(() => {
                    console.log('Thanks for sharing!');
                })
                .catch(console.error);
            } else {
                // Fallback for share options
                let shareOptions = `
                    <a href="https://wa.me/?text=${encodeURIComponent(text + ' ' + url)}" target="_blank" class="btn btn-custom mx-2">WhatsApp</a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}" target="_blank" class="btn btn-custom mx-2">Facebook</a>
                    <a href="mailto:?subject=${encodeURIComponent(document.title)}&body=${encodeURIComponent(text + ' ' + url)}" target="_blank" class="btn btn-custom mx-2">Gmail</a>
                `;
                document.querySelector('.d-flex').insertAdjacentHTML('beforeend', shareOptions);
            }
        }
    </script>
</body>
</html>
