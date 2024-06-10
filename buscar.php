<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar - Big Bos Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="container">
        <h1>Resultados de búsqueda</h1>
        <?php
        $query = $_GET['q'];
        echo "<p>Resultados para: " . htmlspecialchars($query) . "</p>";
        // Aquí iría la lógica para buscar y mostrar los resultados.
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
