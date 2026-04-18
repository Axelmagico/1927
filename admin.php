<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASA 1927 | Eventos Memorables</title>
    <style>
        /* --- VARIABLES GLOBALES --- */
        :root {
            --primary: #111111;
            --secondary: #222222;
            --gold: #c5a059;
            --text-light: #f4f4f4;
            --text-muted: #aaaaaa;
            --font-main: 'Helvetica Neue', Arial, sans-serif;
            --font-title: 'Georgia', serif;
            
            /* Altura base para PC */
            --header-height: 160px; 
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--primary);
            color: var(--text-light);
            line-height: 1.6;
            padding-top: var(--header-height);
        }

        /* --- HEADER Y NAVEGACIÓN --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            height: var(--header-height);
            padding: 0 5%;
            display: flex;
            justify-content: space-between; /* Separa logo de menú */
            align-items: center;
            background: rgba(17, 17, 17, 0.98);
            z-index: 2000; /* Prioridad máxima */
            border-bottom: 1px solid #333;
            transition: all 0.3s ease;
        }

        .logo-link {
            display: flex;
            align-items: center;
            height: 100%;
            text-decoration: none;
            max-width: 70%; /* Deja espacio para el botón de menú en móviles */
        }

        .logo-img {
            /* TAMAÑO PC */
            height: auto;
            max-height: 120px; /* No desborda los 160px del header */
            width: 450px; 
            max-width: 100%;
            object-fit: contain;
            display: block;
            transition: all 0.3s ease;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav a {
            color: var(--text-light);
            text-decoration: none;
            margin-left: 30px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: color 0.3s ease;
            font-weight: 600;
        }

        nav a:hover { color: var(--gold); }

        /* Icono Hamburguesa */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 6px;
            z-index: 2100;
            padding: 10px;
        }

        .menu-toggle span {
            width: 30px;
            height: 3px;
            background-color: var(--gold);
            transition: 0.3s;
        }

        /* --- SECCIÓN HERO --- */
        .hero {
            position: relative;
            height: calc(100vh - var(--header-height));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
            overflow: hidden;
        }

        .video-bg {
            position: absolute;
            top: 50%; left: 50%;
            min-width: 100%; min-height: 100%;
            width: auto; height: auto;
            z-index: -2;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .hero-content h1 {
            font-family: var(--font-title);
            font-size: 4rem;
            margin-bottom: 10px;
            color: var(--gold);
            text-shadow: 2px 2px 10px rgba(0,0,0,0.8);
        }

        /* --- SECCIÓN EL LUGAR (MAGAZINE) --- */
        section { padding: 100px 10%; }
        
        .magazine-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .section-lead {
            font-size: 1.25rem;
            color: var(--gold);
            margin-bottom: 40px;
            text-align: justify;
        }

        .historia-extendida {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.8s ease-in-out;
        }

        .historia-extendida.abierto {
            max-height: 2500px;
        }

        .magazine-paragraph {
            margin-bottom: 25px;
            color: var(--text-muted);
            font-size: 1.1rem;
            text-align: justify;
            overflow: hidden;
        }

        .float-right-img {
            float: right;
            width: 45%;
            margin-left: 25px;
            margin-bottom: 15px;
            border: 1px solid var(--gold);
        }

        .float-left-img {
            float: left;
            width: 40%;
            margin-right: 25px;
            margin-bottom: 15px;
            border: 1px solid var(--gold);
        }

        .btn-leer-mas {
            background: none;
            border: 1px solid var(--gold);
            color: var(--gold);
            padding: 12px 30px;
            font-size: 0.9rem;
            letter-spacing: 2px;
            cursor: pointer;
            text-transform: uppercase;
            margin: 20px auto;
            display: block;
            transition: all 0.3s;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            :root { --header-height: 80px; } /* Header más compacto en móvil */

            header {
                padding: 0 15px;
            }

            .logo-link {
                max-width: 65%; /* Restringe el contenedor para no pisar el botón */
            }

            .logo-img { 
                height: 50px; /* Forzamos altura pequeña para que quepa en los 80px */
                width: auto;
                max-width: 100%;
                max-height: 55px; 
            }

            .menu-toggle { display: flex; }

            nav {
                position: fixed;
                top: 0; right: -100%;
                width: 80%; height: 100vh;
                background: var(--primary);
                display: flex; justify-content: center; align-items: center;
                transition: 0.5s ease-in-out;
                border-left: 1px solid var(--gold);
                z-index: 1050;
            }

            nav.active { right: 0; }
            nav ul { flex-direction: column; text-align: center; gap: 40px; }
            nav a { margin-left: 0; font-size: 1.5rem; }

            .hero-content h1 { font-size: 2.2rem; }
            .float-right-img, .float-left-img {
                width: 100%;
                float: none;
                margin: 0 0 15px 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <a href="#" class="logo-link">
            <img src="logo.png" alt="CASA 1927" class="logo-img">
        </a>

        <div class="menu-toggle" id="mobile-menu">
            <span></span><span></span><span></span>
        </div>

        <nav id="nav-menu">
            <ul>
                <li><a href="#historia">El Lugar</a></li>
                <li><a href="#espacios">Infraestructura</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <video class="video-bg" autoplay loop muted playsinline preload="auto">
            <source src="videopromo.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Eventos Memorables</h1>
            <p>Donde el anfitrión sos VOS.</p>
        </div>
    </section>

    <section id="historia" class="venue-magazine">
        <div class="magazine-container">
            <h2 class="section-title" style="text-align: center;">EL LUGAR</h2>
            <p class="section-lead">CASA 1927 cuenta con una ubicación privilegiada entre los barrios Ricardo Brugada y Las Mercedes, sobre la Avda. España casi Brasil.</p>

            <div id="historia-magazine-content" class="historia-extendida">
                <p class="magazine-paragraph">Conocida como "la rica villa" en los 70, la historia de esta imponente casa se remonta al año 1927. Construida por el Arquitecto Tomás Romero para Rigoberto Caballero.</p>
                
                <div class="magazine-paragraph">
                    <img src="fachacolor.png" alt="CASA 1927" class="float-right-img">
                    <p>El proyecto lo llevó a cabo junto a un grupo de ingenieros europeos en Berlín. Cada material fue traído por catálogo desde el viejo continente.</p>
                </div>

                <div class="magazine-paragraph">
                    <img src="fachaBN.png" alt="Historia" class="float-left-img">
                    <p>Durante la Guerra del Chaco funcionó como hospital de sangre y luego fue sede de Radio Cáritas y la Universidad Americana.</p>
                </div>
            </div>

            <button class="btn-leer-mas" id="btn-leer-mas">+ Leer toda la historia</button>
        </div>
    </section>

    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.getElementById('nav-menu');
        
        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        const btnLeerMas = document.getElementById('btn-leer-mas');
        const textoHistoria = document.getElementById('historia-magazine-content');

        btnLeerMas.addEventListener('click', () => {
            textoHistoria.classList.toggle('abierto');
            btnLeerMas.innerHTML = textoHistoria.classList.contains('abierto') ? '- Ocultar historia' : '+ Leer toda la historia';
        });
    </script>
</body>
</html>
