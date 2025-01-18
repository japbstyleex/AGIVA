<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁGIVA</title>
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
                <a class="navbar-brand" href="index.php"><img src="../assets/img/logo.ico" alt="ÁGIVA" height="30"></a>
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
            <h1 class="display-4">Bienvenidos a ÁGIVA gastrohotel Sevilla</h1>
            <p class="lead">Donde la elegancia y la cocina excepcional se encuentran.</p>
            <a href="reservations.php" class="btn btn-primary btn-lg mt-3">Reserva ahora</a>
        </div>
    </section>

    <!-- Sección de Slider con Tarjetas -->
    <section class="slider py-5">
        <div class="container">
            <h2 class="text-center mb-4">Descubre nuestras experiencias</h2>
            <div id="cardSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../assets/img/terraza.jpeg" class="card-img-top" alt="Habitación Deluxe">
                                    <div class="card-body">
                                        <h5 class="card-title">Habitación Deluxe</h5>
                                        <p class="card-text">Confort y elegancia con vistas espectaculares.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../assets/img/card2.jpg" class="card-img-top" alt="Gastronomía">
                                    <div class="card-body">
                                        <h5 class="card-title">Gastronomía</h5>
                                        <p class="card-text">Sabores auténticos en cada plato.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../assets/img/card3.jpg" class="card-img-top" alt="Spa y Bienestar">
                                    <div class="card-body">
                                        <h5 class="card-title">Spa y Bienestar</h5>
                                        <p class="card-text">Relajación total en un entorno de lujo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 ÁGIVA. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts personalizados -->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>