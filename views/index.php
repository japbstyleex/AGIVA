<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Gastronómico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <!-- Header con menú de navegación -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hotel Gastronómico</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menú</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservations.php">Reservas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-dark text-white text-center d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div>
            <h1 class="display-4">Bienvenidos al Hotel Gastronómico</h1>
            <p class="lead">Donde la elegancia y la cocina excepcional se encuentran.</p>
            <a href="reservations.php" class="btn btn-primary btn-lg mt-3">Reserva ahora</a>
        </div>
    </section>

    <!-- Sección de presentación -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/terraza.jpeg" class="img-fluid rounded" alt="Terraza del hotel">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2 class="mb-3">Una experiencia inolvidable</h2>
                <p>Disfruta de un ambiente único, con platos preparados por chefs galardonados y un servicio de primera clase. Nuestro hotel combina confort y gastronomía en un entorno incomparable.</p>
                <a href="menu.php" class="btn btn-secondary">Descubre nuestro menú</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Hotel Gastronómico. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts personalizados -->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>