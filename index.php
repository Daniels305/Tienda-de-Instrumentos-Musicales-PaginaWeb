<?php
// Catálogo extendido de instrumentos procesado desde el servidor PHP en Azure
$instrumentos = [
    [
        "id" => 1,
        "nombre" => "Fender Stratocaster Pastel Mint",
        "categoria" => "Cuerdas",
        "precio" => 3850000,
        "stock" => 5,
        "tag" => "Más Vendido",
        "color_tag" => "pastel-mint",
        "imagen" => "https://images.unsplash.com/photo-1564186763535-ebb21ef5277f?auto=format&fit=crop&w=800&q=80",
        "descripcion" => "Sonido cristalino y versátil con cuerpo de aliso seleccionado y acabado en verde menta satinado.",
        "specs" => "Cuerpo: Aliso | Mástil: Arce en forma C | Trastes: 22 Medium Jumbo | Pastillas: 3x Single-Coil Alnico V"
    ],
    [
        "id" => 2,
        "nombre" => "Batería Acústica Pearl Export Shell",
        "categoria" => "Percusión",
        "precio" => 4200000,
        "stock" => 2,
        "tag" => "Edición Estudio",
        "color_tag" => "pastel-rose",
        "imagen" => "https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?auto=format&fit=crop&w=800&q=80",
        "descripcion" => "Set completo de 5 piezas con cascos híbridos de caoba y álamo para una resonancia cálida y profunda.",
        "specs" => "Bombo: 22x18 | Toms: 10x7 y 12x8 | Floor Tom: 16x16 | Redoblante: 14x5.5 | Incluye herrajes serie 830"
    ],
    [
        "id" => 3,
        "nombre" => "Sintetizador Yamaha MX61 V2",
        "categoria" => "Teclados",
        "precio" => 3100000,
        "stock" => 4,
        "tag" => "Nuevo",
        "color_tag" => "pastel-lavender",
        "imagen" => "https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=800&q=80",
        "descripcion" => "Más de 1000 sonidos MOTIF XS integrados, interfaz USB Audio/MIDI bidireccional y controles asignables.",
        "specs" => "Teclas: 61 sensibles a la velocidad | Polifonía: 128 notas | Peso: 4.8 kg | Conectividad: USB, MIDI, Aux In"
    ],
    [
        "id" => 4,
        "nombre" => "Bajo Eléctrico Ibanez GSR200",
        "categoria" => "Cuerdas",
        "precio" => 1450000,
        "stock" => 7,
        "tag" => "Recomendado",
        "color_tag" => "pastel-sky",
        "imagen" => "https://images.unsplash.com/photo-1550291652-6ea9114a47b1?auto=format&fit=crop&w=800&q=80",
        "descripcion" => "Mástil ultradelgado de fácil ejecución con circuito activo Phat II EQ que añade potencia extra en frecuencias graves.",
        "specs" => "Cuerdas: 4 | Cuerpo: Álamo | Mástil: Arce GSR4 | Puente: B10 | Ecualizador: Phat II Activo"
    ],
    [
        "id" => 5,
        "nombre" => "Micrófono Shure SM7B Vocal",
        "categoria" => "Audio",
        "precio" => 1890000,
        "stock" => 3,
        "tag" => "Estándar Pro",
        "color_tag" => "pastel-peach",
        "imagen" => "https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=800&q=80",
        "descripcion" => "Micrófono dinámico cardioide diseñado para grabación vocal de estudio, broadcasting y producción musical.",
        "specs" => "Tipo: Dinámico | Patrón: Cardioide | Respuesta: 50 Hz a 20 kHz | Aislamiento neumático anti-vibración"
    ],
    [
        "id" => 6,
        "nombre" => "Guitarra Acústica Taylor 114ce",
        "categoria" => "Cuerdas",
        "precio" => 3500000,
        "stock" => 6,
        "tag" => "Acústica Premium",
        "color_tag" => "pastel-mint",
        "imagen" => "https://images.unsplash.com/photo-1510915361894-db8b60106cb1?auto=format&fit=crop&w=800&q=80",
        "descripcion" => "Diseño Grand Auditorium con corte veneciano, tapa de abeto Sitka macizo y sistema de preamplificación ES2.",
        "specs" => "Formato: Grand Auditorium | Tapa: Abeto Sitka | Aros y Fondo: Nogal | Electrónica: Expression System 2"
    ]
];

$servidor_azure = gethostname();
$version_php = phpversion();
date_default_timezone_set('America/Bogota');
$fecha_actual = date("d/m/Y h:i A");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrazyStrings Boutique | Instrumentos Musicales en Azure</title>
    <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --bg-cream: #FAF7F2;
            --bg-card: #FFFFFF;
            --text-dark: #2C302E;
            --text-muted: #6E7572;
            --pastel-sage: #84A59D;
            --pastel-sage-dark: #6B8E85;
            --pastel-rose: #F5CAC3;
            --pastel-peach: #F7EDE2;
            --pastel-lavender: #E2ECE9;
            --pastel-sky: #D8E2DC;
            --pastel-coral: #F28482;
            --border-soft: #EAE4DC;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-cream);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        h1, h2, h3, .serif-title {
            font-family: 'Playfair Display', serif;
        }

        /* Navbar Elegante */
        .navbar-custom {
            background-color: rgba(250, 247, 242, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-soft);
            padding: 1rem 0;
        }

        .brand-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--text-dark);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        /* Hero Pastel */
        .hero-section {
            background: linear-gradient(135deg, #F7EDE2 0%, #E2ECE9 50%, #F5CAC3 100%);
            border-radius: 28px;
            padding: 4.5rem 3rem;
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(132, 165, 157, 0.08);
        }

        /* Etiquetas Pasteles */
        .badge-pastel {
            font-weight: 600;
            padding: 0.45em 0.9em;
            border-radius: 50px;
            font-size: 0.75rem;
            letter-spacing: 0.3px;
        }
        .pastel-mint { background-color: #D8F3DC; color: #2D6A4F; }
        .pastel-rose { background-color: #FFDDD2; color: #9E2A2B; }
        .pastel-lavender { background-color: #E0E1DD; color: #415A77; }
        .pastel-sky { background-color: #CAF0F8; color: #0077B6; }
        .pastel-peach { background-color: #FFE5D9; color: #9D4EDD; }

        /* Botones Personalizados */
        .btn-sage {
            background-color: var(--pastel-sage);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.65rem 1.5rem;
            font-weight: 600;
            transition: all 0.25s ease;
        }
        .btn-sage:hover {
            background-color: var(--pastel-sage-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(132, 165, 157, 0.25);
        }

        .btn-outline-soft {
            background-color: transparent;
            color: var(--text-dark);
            border: 1.5px solid var(--border-soft);
            border-radius: 50px;
            padding: 0.55rem 1.3rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-outline-soft:hover, .btn-outline-soft.active {
            background-color: var(--text-dark);
            color: white;
            border-color: var(--text-dark);
        }

        /* Tarjetas de Producto */
        .product-card {
            background: var(--bg-card);
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 45px rgba(44, 48, 46, 0.07);
            border-color: var(--pastel-sage);
        }

        .img-wrapper {
            position: relative;
            height: 240px;
            overflow: hidden;
            background-color: #F4F1EA;
        }
        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .product-card:hover .img-wrapper img {
            transform: scale(1.06);
        }

        /* Buscador */
        .search-box {
            background: white;
            border: 1.5px solid var(--border-soft);
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            transition: border-color 0.2s;
        }
        .search-box:focus-within {
            border-color: var(--pastel-sage);
            box-shadow: 0 0 0 4px rgba(132, 165, 157, 0.15);
        }
        .search-box input {
            border: none;
            outline: none;
            width: 100%;
            background: transparent;
        }

        /* Panel Cloud Azure */
        .cloud-status-card {
            background: linear-gradient(to right, #FFFFFF, #F7F9F8);
            border: 1px solid var(--border-soft);
            border-left: 5px solid var(--pastel-sage);
            border-radius: 20px;
            padding: 2rem;
        }

        /* Carrito Offcanvas */
        .offcanvas-custom {
            background-color: var(--bg-cream);
            border-left: 1px solid var(--border-soft);
        }
        .cart-item {
            background: white;
            border-radius: 16px;
            padding: 1rem;
            border: 1px solid var(--border-soft);
        }
    </style>
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="brand-logo d-flex align-items-center gap-2" href="#">
                <span class="p-2 rounded-circle d-inline-flex align-items-center justify-content-center" style="background-color: var(--pastel-rose);">
                    <i class="bi bi-music-note-beamed fs-5 text-dark"></i>
                </span>
                CrazyStrings
            </a>

            <div class="d-flex align-items-center gap-3 order-lg-3">
                <button class="btn btn-outline-soft btn-sm d-none d-md-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalArquitectura">
                    <i class="bi bi-cloud-check text-success"></i> Estado Azure
                </button>
                <button class="btn btn-sage position-relative d-flex align-items-center gap-2" data-bs-toggle="offcanvas" data-bs-target="#carritoLateral">
                    <i class="bi bi-bag-heart"></i>
                    <span>Mi Carrito</span>
                    <span id="contador-carrito" class="badge bg-dark text-white rounded-pill">0</span>
                </button>
            </div>

            <div class="collapse navbar-collapse justify-content-center order-lg-2" id="navMenu">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#catalogo">Colección</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium text-dark" href="#infraestructura">Infraestructura Cloud</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section class="container" id="inicio">
        <div class="hero-section">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <span class="badge badge-pastel pastel-mint mb-3">
                        <i class="bi bi-stars me-1"></i> Plataforma E-Commerce en Microsoft Azure
                    </span>
                    <h1 class="display-4 fw-bold mb-3" style="line-height: 1.15;">
                        El arte del sonido con diseño y precisión.
                    </h1>
                    <p class="lead text-secondary mb-4" style="max-width: 560px;">
                        Explora nuestra selección curada de instrumentos musicales profesionales. Alojamiento de alta disponibilidad desplegado mediante Azure App Service.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#catalogo" class="btn btn-sage btn-lg px-4">
                            Explorar Instrumentos <i class="bi bi-arrow-down-right ms-1"></i>
                        </a>
                        <button class="btn btn-outline-soft btn-lg bg-white" data-bs-toggle="modal" data-bs-target="#modalGuiaCompra">
                            <i class="bi bi-shield-check me-1"></i> Garantía Boutique
                        </button>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="p-3 bg-white rounded-4 shadow-sm d-inline-block" style="transform: rotate(2deg);">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=700&q=80" class="img-fluid rounded-3" alt="Estudio Musical" style="max-height: 290px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Controles de Búsqueda y Filtros -->
    <section class="container mt-5 pt-3" id="catalogo">
        <div class="row align-items-end justify-content-between gy-3 mb-4">
            <div class="col-lg-5">
                <span class="text-uppercase small fw-bold" style="color: var(--pastel-sage-dark); letter-spacing: 1px;">Catálogo Oficial</span>
                <h2 class="fw-bold mb-0">Colección de Instrumentos</h2>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-wrap justify-content-lg-end gap-2">
                    <button class="btn btn-outline-soft active filtro-btn" data-categoria="Todos">Todos</button>
                    <button class="btn btn-outline-soft filtro-btn" data-categoria="Cuerdas">Cuerdas</button>
                    <button class="btn btn-outline-soft filtro-btn" data-categoria="Percusión">Percusión</button>
                    <button class="btn btn-outline-soft filtro-btn" data-categoria="Teclados">Teclados</button>
                    <button class="btn btn-outline-soft filtro-btn" data-categoria="Audio">Audio Pro</button>
                </div>
            </div>
        </div>

        <!-- Barra de búsqueda -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="search-box d-flex align-items-center">
                    <i class="bi bi-search text-muted me-2"></i>
                    <input type="text" id="input-busqueda" placeholder="Buscar guitarra, sintetizador, micrófono...">
                </div>
            </div>
            <div class="col-md-6 text-md-end mt-2 mt-md-0 d-flex align-items-center justify-content-md-end">
                <span class="text-muted small">Mostrando <strong id="conteo-productos"><?php echo count($instrumentos); ?></strong> instrumentos disponibles</span>
            </div>
        </div>

        <!-- Grilla de Productos generada con PHP -->
        <div class="row g-4" id="contenedor-productos">
            <?php foreach ($instrumentos as $item): ?>
                <div class="col-md-6 col-lg-4 item-catalogo" 
                     data-categoria="<?php echo htmlspecialchars($item['categoria']); ?>" 
                     data-nombre="<?php echo strtolower(htmlspecialchars($item['nombre'] . ' ' . $item['descripcion'])); ?>">
                    <div class="product-card">
                        <div class="img-wrapper">
                            <span class="badge badge-pastel <?php echo $item['color_tag']; ?> position-absolute top-0 start-0 m-3 z-1">
                                <?php echo htmlspecialchars($item['tag']); ?>
                            </span>
                            <span class="badge bg-white text-dark position-absolute top-0 end-0 m-3 z-1 shadow-sm rounded-pill px-3 py-2">
                                <?php echo htmlspecialchars($item['categoria']); ?>
                            </span>
                            <img src="<?php echo $item['imagen']; ?>" alt="<?php echo htmlspecialchars($item['nombre']); ?>">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="small text-success fw-semibold">
                                    <i class="bi bi-check2-circle me-1"></i>En stock (<?php echo $item['stock']; ?> disp.)
                                </span>
                                <span class="text-warning small">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                            <h5 class="fw-bold mb-2"><?php echo htmlspecialchars($item['nombre']); ?></h5>
                            <p class="text-muted small mb-4 flex-grow-1"><?php echo htmlspecialchars($item['descripcion']); ?></p>
                            
                            <div class="pt-3 border-top d-flex align-items-center justify-content-between mt-auto">
                                <div>
                                    <span class="text-muted d-block" style="font-size: 0.72rem;">Precio de contado</span>
                                    <span class="fs-5 fw-bold text-dark">$<?php echo number_format($item['precio'], 0, ',', '.'); ?></span>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-soft btn-sm px-3" 
                                            onclick='verDetalles(<?php echo json_encode($item); ?>)'
                                            title="Ver especificaciones">
                                        <i class="bi bi-eye"></i> Detalles
                                    </button>
                                    <button class="btn btn-sage btn-sm px-3" 
                                            onclick='agregarAlCarrito(<?php echo json_encode($item); ?>)'>
                                        <i class="bi bi-plus-lg me-1"></i>Agregar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Sección de Telemetría e Infraestructura en Azure -->
    <section class="container my-5 pt-4" id="infraestructura">
        <div class="cloud-status-card shadow-sm">
            <div class="row align-items-center gy-4">
                <div class="col-lg-4">
                    <span class="badge badge-pastel pastel-sky mb-2">Evidencia Académica en Vivo</span>
                    <h3 class="serif-title fw-bold mb-2">Infraestructura Microsoft Azure</h3>
                    <p class="text-muted small mb-0">
                        Parámetros obtenidos dinámicamente en tiempo de ejecución desde el contenedor Linux alojado en el centro de datos de Brasil.
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-4" style="background-color: var(--pastel-peach);">
                                <div class="small text-muted mb-1"><i class="bi bi-hdd-network me-1"></i>Servicio Cloud</div>
                                <div class="fw-bold">Azure App Service (PaaS)</div>
                                <div class="small text-secondary">Región: Brazil South</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-4" style="background-color: var(--pastel-lavender);">
                                <div class="small text-muted mb-1"><i class="bi bi-cpu me-1"></i>Instancia & Runtime</div>
                                <div class="fw-bold text-truncate" title="<?php echo $servidor_azure; ?>">Host: <?php echo $servidor_azure; ?></div>
                                <div class="small text-secondary">Motor: PHP <?php echo $version_php; ?></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="p-3 rounded-4" style="background-color: var(--pastel-rose);">
                                <div class="small text-muted mb-1"><i class="bi bi-git me-1"></i>Despliegue Continuo</div>
                                <div class="fw-bold">GitHub CI/CD Activo</div>
                                <div class="small text-secondary"><?php echo $fecha_actual; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="border-top py-5 mt-5" style="background-color: #F3EFE6; border-color: var(--border-soft) !important;">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div>
                <span class="serif-title fw-bold fs-5">CrazyStrings Boutique</span>
                <p class="text-muted small mb-0">© 2026 Proyecto Final de Computación en la Nube — UNIMINUTO.</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-soft btn-sm" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                    <i class="bi bi-arrow-up me-1"></i> Volver arriba
                </button>
            </div>
        </div>
    </footer>

    <!-- OFFCANVAS: Carrito de Compras Funcional -->
    <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="carritoLateral" style="width: 420px;">
        <div class="offcanvas-header border-bottom p-4">
            <h5 class="serif-title fw-bold mb-0">
                <i class="bi bi-bag-heart me-2"></i>Tu Selección Musical
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-4 d-flex flex-column">
            <div id="lista-carrito" class="flex-grow-1 d-flex flex-column gap-3 overflow-auto">
                <!-- Se llena con JS -->
            </div>

            <div class="border-top pt-3 mt-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-muted">Envío Asegurado:</span>
                    <span class="badge badge-pastel pastel-mint">Gratis</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="fw-bold fs-5">Total a pagar:</span>
                    <span id="total-carrito" class="fw-bold fs-4 text-dark">$0</span>
                </div>
                <div class="d-grid gap-2">
                    <button id="btn-ir-pagar" class="btn btn-sage btn-lg" onclick="abrirModalPago()" disabled>
                        Finalizar Compra <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                    <button class="btn btn-outline-soft btn-sm" onclick="vaciarCarrito()">
                        Vaciar carrito
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 1: Detalles Técnicos del Producto -->
    <div class="modal fade" id="modalDetalles" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 bg-light">
                        <img id="det-imagen" src="" class="w-100 h-100" style="object-fit: cover; min-height: 320px;" alt="Instrumento">
                    </div>
                    <div class="col-md-6 p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span id="det-categoria" class="badge badge-pastel pastel-mint">Categoría</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <h4 id="det-nombre" class="serif-title fw-bold mb-2"></h4>
                        <h5 id="det-precio" class="fw-bold text-secondary mb-3"></h5>
                        <p id="det-descripcion" class="text-muted small mb-3"></p>
                        
                        <div class="p-3 rounded-3 mb-4" style="background-color: var(--bg-cream); border: 1px solid var(--border-soft);">
                            <div class="small fw-bold mb-1"><i class="bi bi-sliders me-1"></i>Ficha Técnica:</div>
                            <div id="det-specs" class="small text-secondary"></div>
                        </div>

                        <div class="mt-auto d-grid">
                            <button id="det-btn-agregar" class="btn btn-sage">
                                <i class="bi bi-bag-plus me-1"></i> Agregar al Carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 2: Checkout y Confirmación de Pedido -->
    <div class="modal fade" id="modalCheckout" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 p-2" style="background-color: var(--bg-cream);">
                <div class="modal-header border-0 pb-0">
                    <h5 class="serif-title fw-bold">Confirmar Orden de Compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="form-checkout" onsubmit="procesarOrden(event)">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Nombre Completo</label>
                            <input type="text" id="chk-nombre" class="form-control rounded-3" placeholder="Ej. Daniel Santiago Murillo" required>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label small fw-semibold">Correo Electrónico</label>
                                <input type="email" id="chk-correo" class="form-control rounded-3" placeholder="correo@uniminuto.edu.co" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label small fw-semibold">Ciudad de Entrega</label>
                                <select id="chk-ciudad" class="form-select rounded-3" required>
                                    <option value="Bogotá D.C.">Bogotá D.C.</option>
                                    <option value="Soacha">Soacha</option>
                                    <option value="Medellín">Medellín</option>
                                    <option value="Cali">Cali</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Método de Pago</label>
                            <select id="chk-pago" class="form-select rounded-3" required>
                                <option value="PSE / Transferencia Bancaria">PSE / Transferencia Bancaria</option>
                                <option value="Tarjeta de Crédito / Débito">Tarjeta de Crédito / Débito</option>
                                <option value="Pago Contraentrega">Pago Contraentrega</option>
                            </select>
                        </div>
                        <div class="p-3 bg-white rounded-3 border mb-3 d-flex justify-content-between align-items-center">
                            <span class="small text-muted">Total a facturar:</span>
                            <strong id="chk-total" class="fs-5">$0</strong>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-sage btn-lg">
                                <i class="bi bi-check2-circle me-1"></i> Generar Orden y Factura
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 3: Recibo / Factura Generada -->
    <div class="modal fade" id="modalRecibo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 p-4 text-center">
                <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; background-color: #D8F3DC; color: #2D6A4F;">
                    <i class="bi bi-check-lg fs-2"></i>
                </div>
                <span class="badge badge-pastel pastel-mint mx-auto mb-2" id="rec-orden">ORDEN #CS-0000</span>
                <h4 class="serif-title fw-bold mb-1">¡Compra Procesada con Éxito!</h4>
                <p class="text-muted small mb-4">Tu transacción ha sido registrada en el servidor de Azure.</p>
                
                <div class="text-start p-3 rounded-3 mb-4" style="background-color: var(--bg-cream); border: 1px solid var(--border-soft);">
                    <div class="d-flex justify-content-between small mb-1">
                        <span class="text-muted">Cliente:</span>
                        <strong id="rec-cliente"></strong>
                    </div>
                    <div class="d-flex justify-content-between small mb-1">
                        <span class="text-muted">Destino:</span>
                        <strong id="rec-ciudad"></strong>
                    </div>
                    <div class="d-flex justify-content-between small mb-1">
                        <span class="text-muted">Medio de pago:</span>
                        <strong id="rec-metodo"></strong>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">Total Pagado:</span>
                        <strong id="rec-total" class="text-success"></strong>
                    </div>
                </div>

                <button class="btn btn-sage w-100" data-bs-dismiss="modal">Aceptar y Continuar</button>
            </div>
        </div>
    </div>

    <!-- MODAL 4: Estado de Arquitectura Cloud -->
    <div class="modal fade" id="modalArquitectura" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 p-3">
                <div class="modal-header border-0">
                    <h5 class="serif-title fw-bold mb-0"><i class="bi bi-cloud-check me-2"></i>Arquitectura en Microsoft Azure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body small">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Proveedor Cloud:</span>
                            <strong>Microsoft Azure (Azure for Students)</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Modelo de Servicio:</span>
                            <strong>PaaS (Azure App Service)</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Región Activa:</span>
                            <strong>Brazil South (São Paulo)</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Automatización:</span>
                            <strong>GitHub Deployment Center (Kudu)</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 5: Garantía Boutique -->
    <div class="modal fade" id="modalGuiaCompra" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 p-3">
                <div class="modal-header border-0">
                    <h5 class="serif-title fw-bold mb-0">Beneficios CrazyStrings Boutique</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex gap-3 mb-3">
                        <i class="bi bi-box-seam fs-3 text-secondary"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Calibración por Luthier Incluida</h6>
                            <p class="small text-muted mb-0">Cada guitarra y bajo se entrega octavado y ajustado antes del despacho.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <i class="bi bi-shield-check fs-3 text-secondary"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Garantía Oficial de 2 Años</h6>
                            <p class="small text-muted mb-0">Soporte técnico directo y respaldo en todos los componentes electrónicos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notificación Toast Flotante -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="toastNotificacion" class="toast align-items-center border-0 rounded-4 shadow" role="alert" style="background-color: var(--text-dark); color: white;">
            <div class="d-flex p-2">
                <div class="toast-body" id="toast-mensaje">
                    Instrumento agregado al carrito.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lógica Completa de Carrito, Filtros, Buscador y Modales -->
    <script>
        let carrito = JSON.parse(localStorage.getItem('carrito_crazystrings')) || [];

        const formatoCOP = (valor) => '$' + Number(valor).toLocaleString('es-CO');

        function mostrarToast(mensaje) {
            document.getElementById('toast-mensaje').innerHTML = `<i class="bi bi-check-circle-fill text-success me-2"></i>${mensaje}`;
            const toastEl = document.getElementById('toastNotificacion');
            const toast = new bootstrap.Toast(toastEl, { delay: 2500 });
            toast.show();
        }

        function agregarAlCarrito(producto) {
            const existente = carrito.find(item => item.id === producto.id);
            if (existente) {
                existente.cantidad += 1;
            } else {
                carrito.push({ ...producto, cantidad: 1 });
            }
            guardarYRenderizarCarrito();
            mostrarToast(`<strong>${producto.nombre}</strong> se agregó a tu bolsa.`);
        }

        function cambiarCantidad(id, cambio) {
            const item = carrito.find(p => p.id === id);
            if (!item) return;
            item.cantidad += cambio;
            if (item.cantidad <= 0) {
                carrito = carrito.filter(p => p.id !== id);
            }
            guardarYRenderizarCarrito();
        }

        function vaciarCarrito() {
            carrito = [];
            guardarYRenderizarCarrito();
        }

        function guardarYRenderizarCarrito() {
            localStorage.setItem('carrito_crazystrings', JSON.stringify(carrito));
            const contenedor = document.getElementById('lista-carrito');
            const contador = document.getElementById('contador-carrito');
            const totalTexto = document.getElementById('total-carrito');
            const btnPagar = document.getElementById('btn-ir-pagar');

            const totalUnidades = carrito.reduce((acc, item) => acc + item.cantidad, 0);
            const precioTotal = carrito.reduce((acc, item) => acc + (item.precio * item.cantidad), 0);

            contador.textContent = totalUnidades;
            totalTexto.textContent = formatoCOP(precioTotal);
            document.getElementById('chk-total').textContent = formatoCOP(precioTotal);

            if (carrito.length === 0) {
                btnPagar.disabled = true;
                contenedor.innerHTML = `
                    <div class="text-center my-auto py-5 text-muted">
                        <i class="bi bi-bag-x display-4 d-block mb-2"></i>
                        <p class="mb-0">Tu carrito está vacío</p>
                        <small>Explora la colección y agrega tus instrumentos favoritos.</small>
                    </div>`;
                return;
            }

            btnPagar.disabled = false;
            contenedor.innerHTML = carrito.map(item => `
                <div class="cart-item d-flex align-items-center gap-3">
                    <img src="${item.imagen}" class="rounded-3" style="width: 64px; height: 64px; object-fit: cover;">
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-0 small">${item.nombre}</h6>
                        <span class="text-muted small">${formatoCOP(item.precio)} c/u</span>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <button class="btn btn-sm btn-outline-secondary py-0 px-2" onclick="cambiarCantidad(${item.id}, -1)">-</button>
                            <span class="small fw-bold">${item.cantidad}</span>
                            <button class="btn btn-sm btn-outline-secondary py-0 px-2" onclick="cambiarCantidad(${item.id}, 1)">+</button>
                        </div>
                    </div>
                    <div class="text-end">
                        <div class="fw-bold small">${formatoCOP(item.precio * item.cantidad)}</div>
                        <button class="btn btn-link text-danger p-0 small mt-1" onclick="cambiarCantidad(${item.id}, -99)">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            `).join('');
        }

        function verDetalles(item) {
            document.getElementById('det-imagen').src = item.imagen;
            document.getElementById('det-categoria').textContent = item.categoria;
            document.getElementById('det-nombre').textContent = item.nombre;
            document.getElementById('det-precio').textContent = formatoCOP(item.precio) + ' COP';
            document.getElementById('det-descripcion').textContent = item.descripcion;
            document.getElementById('det-specs').textContent = item.specs;
            
            const btn = document.getElementById('det-btn-agregar');
            btn.onclick = () => {
                agregarAlCarrito(item);
                bootstrap.Modal.getInstance(document.getElementById('modalDetalles')).hide();
            };

            new bootstrap.Modal(document.getElementById('modalDetalles')).show();
        }

        function abrirModalPago() {
            const offcanvasEl = document.getElementById('carritoLateral');
            const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
            if (offcanvas) offcanvas.hide();
            new bootstrap.Modal(document.getElementById('modalCheckout')).show();
        }

        function procesarOrden(e) {
            e.preventDefault();
            const nombre = document.getElementById('chk-nombre').value;
            const ciudad = document.getElementById('chk-ciudad').value;
            const metodo = document.getElementById('chk-pago').value;
            const total = document.getElementById('chk-total').textContent;
            const numOrden = 'ORDEN #CS-' + Math.floor(100000 + Math.random() * 900000);

            document.getElementById('rec-orden').textContent = numOrden;
            document.getElementById('rec-cliente').textContent = nombre;
            document.getElementById('rec-ciudad').textContent = ciudad;
            document.getElementById('rec-metodo').textContent = metodo;
            document.getElementById('rec-total').textContent = total;

            bootstrap.Modal.getInstance(document.getElementById('modalCheckout')).hide();
            vaciarCarrito();
            document.getElementById('form-checkout').reset();
            new bootstrap.Modal(document.getElementById('modalRecibo')).show();
        }

        // Filtros por Categoría y Buscador en Vivo
        let categoriaActiva = 'Todos';
        const botonesFiltro = document.querySelectorAll('.filtro-btn');
        const inputBusqueda = document.getElementById('input-busqueda');
        const itemsCatalogo = document.querySelectorAll('.item-catalogo');

        function filtrarCatalogo() {
            const texto = inputBusqueda.value.toLowerCase().trim();
            let visibles = 0;

            itemsCatalogo.forEach(card => {
                const cat = card.getAttribute('data-categoria');
                const nom = card.getAttribute('data-nombre');
                const coincideCategoria = (categoriaActiva === 'Todos' || cat === categoriaActiva);
                const coincideTexto = nom.includes(texto);

                if (coincideCategoria && coincideTexto) {
                    card.classList.remove('d-none');
                    visibles++;
                } else {
                    card.classList.add('d-none');
                }
            });

            document.getElementById('conteo-productos').textContent = visibles;
        }

        botonesFiltro.forEach(btn => {
            btn.addEventListener('click', () => {
                botonesFiltro.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                categoriaActiva = btn.getAttribute('data-categoria');
                filtrarCatalogo();
            });
        });

        inputBusqueda.addEventListener('input', filtrarCatalogo);

        // Inicializar carrito al cargar la página
        document.addEventListener('DOMContentLoaded', guardarYRenderizarCarrito);
    </script>
</body>
</html>
