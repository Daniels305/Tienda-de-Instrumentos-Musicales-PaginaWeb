<?php
// Catálogo de instrumentos integrado en PHP (No requiere MySQL externo)
$instrumentos = [
    [
        "nombre" => "Guitarra Eléctrica Fender Stratocaster",
        "categoria" => "Cuerdas",
        "precio" => "$3.850.000 COP",
        "stock" => "Disponible (5 unidades)",
        "imagen" => "https://images.unsplash.com/photo-1564186763535-ebb21ef5277f?auto=format&fit=crop&w=600&q=80",
        "descripcion" => "Sonido clásico y versátil con cuerpo de aliso y tres pastillas single-coil."
    ],
    [
        "nombre" => "Batería Acústica Pearl Export",
        "categoria" => "Percusión",
        "precio" => "$4.200.000 COP",
        "stock" => "Disponible (2 unidades)",
        "imagen" => "https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?auto=format&fit=crop&w=600&q=80",
        "descripcion" => "Set completo de 5 piezas con platillos y herrajes de alta resistencia."
    ],
    [
        "nombre" => "Teclado Sintetizador Yamaha MX61",
        "categoria" => "Teclados",
        "precio" => "$3.100.000 COP",
        "stock" => "Disponible (4 unidades)",
        "imagen" => "https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=600&q=80",
        "descripcion" => "Más de 1000 sonidos integrados, conexión USB Audio/MIDI y diseño ligero."
    ],
    [
        "nombre" => "Bajo Eléctrico Ibanez GSR200",
        "categoria" => "Cuerdas",
        "precio" => "$1.450.000 COP",
        "stock" => "Disponible (7 unidades)",
        "imagen" => "https://images.unsplash.com/photo-1550291652-6ea9114a47b1?auto=format&fit=crop&w=600&q=80",
        "descripcion" => "Ecualizador activo Phat II que añade potencia adicional de graves."
    ],
    [
        "nombre" => "Micrófono Condensador Shure SM7B",
        "categoria" => "Audio Profesional",
        "precio" => "$1.890.000 COP",
        "stock" => "Últimas 3 unidades",
        "imagen" => "https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=600&q=80",
        "descripcion" => "Ideal para grabación de estudio, voces e instrumentos con aislamiento acústico."
    ],
    [
        "nombre" => "Guitarra Acústica Taylor 114ce",
        "categoria" => "Cuerdas",
        "precio" => "$3.500.000 COP",
        "stock" => "Disponible (6 unidades)",
        "imagen" => "https://images.unsplash.com/photo-1510915361894-db8b60106cb1?auto=format&fit=crop&w=600&q=80",
        "descripcion" => "Tapa de abeto Sitka macizo con sistema electrónico ES2 integrado."
    ]
];

$servidor_azure = gethostname();
$fecha_actual = date("d/m/Y H:i");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrazyStrings | Tienda de Instrumentos en Azure</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url('https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=1400&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
        }
        .card-img-top {
            height: 220px;
            object-fit: cover;
        }
        .badge-cloud {
            background-color: #0078d4;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">🎸 CrazyStrings Cloud</a>
            <span class="badge badge-cloud text-white p-2">Desplegado en Microsoft Azure (Brazil South)</span>
        </div>
    </nav>

    <!-- Encabezado principal -->
    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">CrazyStrings Music Store</h1>
            <p class="lead mb-4">Plataforma de comercio electrónico de instrumentos musicales alojada en Azure App Service (PaaS)</p>
            <a href="#catalogo" class="btn btn-primary btn-lg px-4">Ver Catálogo de Instrumentos</a>
        </div>
    </header>

    <!-- Catálogo de productos -->
    <main class="container my-5" id="catalogo">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Catálogo Disponible</h2>
            <span class="text-muted">Total referencias activas: <strong><?php echo count($instrumentos); ?></strong></span>
        </div>

        <div class="row g-4">
            <?php foreach ($instrumentos as $item): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="<?php echo $item['imagen']; ?>" class="card-img-top" alt="<?php echo $item['nombre']; ?>">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-secondary"><?php echo $item['categoria']; ?></span>
                                <span class="badge bg-success"><?php echo $item['stock']; ?></span>
                            </div>
                            <h5 class="card-title fw-bold"><?php echo $item['nombre']; ?></h5>
                            <p class="card-text text-muted flex-grow-1"><?php echo $item['descripcion']; ?></p>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <span class="fs-5 fw-bold text-primary"><?php echo $item['precio']; ?></span>
                                <button class="btn btn-outline-dark btn-sm" onclick="alert('Producto agregado: <?php echo $item['nombre']; ?>')">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Panel técnico para el profesor -->
        <div class="card mt-5 border-primary shadow-sm">
            <div class="card-header bg-primary text-white fw-bold">
                Información de Infraestructura Cloud (Evidencia Académica)
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="mb-1"><strong>Servicio Cloud:</strong> Azure App Service (Linux)</p>
                        <p class="mb-0"><strong>Motor de ejecución:</strong> PHP <?php echo phpversion(); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-1"><strong>Instancia Servidor:</strong> <?php echo $servidor_azure; ?></p>
                        <p class="mb-0"><strong>Despliegue continuo:</strong> GitHub CI/CD Activo</p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-1"><strong>Región de Datos:</strong> Brazil South</p>
                        <p class="mb-0"><strong>Hora del Servidor:</strong> <?php echo $fecha_actual; ?> UTC</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">© 2026 CrazyStrings - Proyecto Final de Computación en la Nube | UNIMINUTO</p>
        </div>
    </footer>

</body>
</html>
