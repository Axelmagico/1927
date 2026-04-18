<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CASA 1927 | Eventos Memorables</title>
    <style>
        :root {
            --primary: #111111;
            --gold: #c5a059;
            --text-light: #f4f4f4;
            --font-title: 'Georgia', serif;
            /* Valores por defecto que el JS va a sobreescribir */
            --header-h: 160px;
            --logo-w: 450px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: sans-serif;
            background-color: var(--primary);
            color: var(--text-light);
            padding-top: var(--header-h);
            overflow-x: hidden;
        }

        /* --- HEADER ADAPTATIVO --- */
        header {
            position: fixed;
            top: 0; width: 100%;
            height: var(--header-h);
            background: rgba(17, 17, 17, 0.98);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 5%;
            z-index: 9999;
            border-bottom: 1px solid #333;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .logo-link {
            display: flex;
            align-items: center;
            max-width: 70%;
            height: 100%;
        }

        .logo-img {
            width: var(--logo-w);
            max-width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
        }

        /* --- NAVEGACIÓN --- */
        nav ul { display: flex; list-style: none; }
        nav a {
            color: white; text-decoration: none;
            margin-left: 25px; font-weight: bold;
            text-transform: uppercase; font-size: 0.85rem;
            letter-spacing: 1px;
        }

        /* Menu Hamburguesa */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
        }
        .menu-toggle span { width: 30px; height: 3px; background: var(--gold); }

        /* --- DETECCION POR CLASES (Inyectadas por JS) --- */
        body.is-mobile header { --header-h: 90px; padding: 0 15px; }
        body.is-mobile .logo-img { --logo-w: 240px; }
        body.is-mobile .menu-toggle { display: flex; }
        body.is-mobile nav {
            position: fixed; top: 0; right: -100%;
            width: 80%; height: 100vh;
            background: #111; transition: 0.4s;
            display: flex; flex-direction: column;
            justify-content: center; align-items: center;
            border-left: 1px solid var(--gold);
        }
        body.is-mobile nav.active { right: 0; }
        body.is-mobile nav ul { flex-direction: column; gap: 30px; }

        body.is-tablet .logo-img { --logo-w: 320px; }

        /* --- SECCIONES --- */
        .hero {
            position: relative; height: 70vh;
            display: flex; justify-content: center; align-items: center;
            overflow: hidden;
        }
        .video-bg {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%; min-height: 100%;
            object-fit: cover; z-index: -1;
        }
        .overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 0; }
        .hero h1 { position: relative; z-index: 1; font-family: var(--font-title); font-size: 3.5rem; color: var(--gold); text-align: center; }

        section { padding: 60px 10%; }
        .magazine-container { max-width: 900px; margin: 0 auto; }
        .float-img { width: 40%; margin: 10px; border: 1px solid var(--gold); }
        .right { float: right; margin-left: 20px; }
        .left { float: left; margin-right: 20px; }
        
        @media (max-width: 768px) {
            .float-img { width: 100%; float: none; margin: 10px 0; }
            .hero h1 { font-size: 2rem; }
        }
    </style>
</head>
<body id="main-body">

    <header id="dynamic-header">
        <a href="#" class="logo-link">
            <img src="logo.png" alt="CASA 1927" class="logo-img" id="main-logo">
        </a>
        <div class="menu-toggle" id="btn-menu">
            <span></span><span></span><span></span>
        </div>
        <nav id="nav-list">
            <ul>
                <li><a href="#historia">El Lugar</a></li>
                <li><a href="#espacios">Espacios</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <video class="video-bg" autoplay loop muted playsinline>
            <source src="videopromo.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <h1>Eventos Memorables</h1>
    </section>

    <section id="historia">
        <div class="magazine-container">
            <h2 style="color:var(--gold); margin-bottom:20px;">EL LUGAR</h2>
            <p>Ubicación privilegiada en Asunción. Una joya arquitectónica de 1927.</p>
            <img src="fachacolor.png" class="float-img right" alt="Fachada Color">
            <p>Construida con materiales importados de Europa, CASA 1927 es hoy el escenario ideal para tus protagonistas.</p>
            <img src="fachaBN.png" class="float-img left" alt="Fachada BN">
            <p>Desde mármol de Carrara hasta detalles Luis XV, cada rincón cuenta una historia única de la capital paraguaya.</p>
        </div>
    </section>

    <script>
        (function() {
            const body = document.getElementById('main-body');
            const w = window.innerWidth;
            const ua = navigator.userAgent;

            // 1. Detección de Sistema Operativo (iOS / Android / PC)
            const isIOS = /iPad|iPhone|iPod/.test(ua) && !window.MSStream;
            const isAndroid = /Android/.test(ua);
            
            // 2. Transformación Dinámica de la Estructura
            if (w <= 768) {
                body.classList.add('is-mobile');
                if(isIOS) body.classList.add('is-ios');
            } else if (w > 768 && w <= 1024) {
                body.classList.add('is-tablet');
            } else {
                body.classList.add('is-desktop');
            }

            console.log("Sistema Adaptativo Activo: " + (isIOS ? "iOS Detectado" : "PC/Android Detectado"));

            // 3. Lógica del Menú Hamburguesa
            const btnMenu = document.getElementById('btn-menu');
            const nav = document.getElementById('nav-list');

            btnMenu.addEventListener('click', () => {
                nav.classList.toggle('active');
            });
        })();
    </script>
</body>
</html>
