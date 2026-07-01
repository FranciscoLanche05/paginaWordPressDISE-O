<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revista Tech</title>
    
    <style>
        /* --- VARIABLES DE DISEÑO --- */
        :root {
            --bg-principal: #0d0f14;
            --bg-tarjeta: #161920;
            --bg-hover: #1e222b;
            --texto-principal: #f0f2f5;
            --texto-mutado: #8a94a6;
            
            --acento-sistema: #00f0ff;     /* Tecnología */
            --acento-gaming: #ad00ff;      /* Videojuegos */
            --acento-guias: #00ff66;       /* Guías */
            
            --borde-sutil: rgba(255, 255, 255, 0.08);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--bg-principal);
            color: var(--texto-principal);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            line-height: 1.6;
            padding-bottom: 60px;
        }

        .contenedor {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Cabecera */
        header {
            background-color: var(--bg-tarjeta);
            border-bottom: 1px solid var(--borde-sutil);
            padding: 25px 0;
            margin-bottom: 40px;
        }

        .header-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.6rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; }
        .logo span { color: var(--acento-sistema); }
        nav a { color: var(--texto-principal); text-decoration: none; margin-left: 20px; font-weight: 500; }

        /* Estructura Base de Secciones */
        .seccion-revista {
            margin-bottom: 70px;
            padding: 30px;
            background: rgba(22, 25, 32, 0.3);
            border-radius: 12px;
            border: 1px solid var(--borde-sutil);
        }

        .titulo-seccion {
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--borde-sutil);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dev-badge {
            font-size: 0.75rem;
            padding: 4px 10px;
            border-radius: 20px;
            background: var(--bg-tarjeta);
            border: 1px solid currentColor;
            letter-spacing: 0;
        }

        /* =========================================================
           DISEÑO 1: VIDEOJUEGOS (Estilo Bento / Steam Store)
           ========================================================= */
        #videojuegos .titulo-seccion { color: var(--acento-gaming); }
        #videojuegos .dev-badge { color: var(--acento-gaming); }

        .bento-gaming {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            grid-auto-rows: minmax(200px, auto);
        }

        .tarjeta-gamer {
            background-color: var(--bg-tarjeta);
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            border: 1px solid var(--borde-sutil);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .tarjeta-gamer:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 15px rgba(173, 0, 255, 0.2);
            border-color: var(--acento-gaming);
        }

        .gamer-destacado {
            grid-column: span 2;
            grid-row: span 2;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            background: linear-gradient(to top, #000 10%, transparent), #1e222b;
        }

        .gamer-normal {
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .tag-juego {
            background: var(--acento-gaming);
            color: #fff;
            padding: 3px 8px;
            font-size: 0.7rem;
            font-weight: bold;
            border-radius: 4px;
            width: max-content;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .tarjeta-gamer h3 { color: #fff; margin-bottom: 10px; font-size: 1.2rem; }
        .gamer-destacado h3 { font-size: 1.8rem; }
        .tarjeta-gamer p { color: var(--texto-mutado); font-size: 0.9rem; margin-bottom: 15px; flex-grow: 1;}

        /* Estilos de Dev 2 (Tecnologia) integrados con las variables */
        #tecnologia .titulo-seccion { color: var(--acento-sistema); }
        #tecnologia .dev-badge { color: var(--acento-sistema); }

        .tarjeta-tech {
            background: rgba(255, 255, 255, 0.03);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--acento-sistema);
            margin-bottom: 20px;
        }
        .tarjeta-tech h3 {
            margin-top: 0;
            color: #ffffff;
        }
        .tarjeta-tech p {
            color: var(--texto-mutado);
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .bento-gaming { grid-template-columns: 1fr 1fr; }
            .gamer-destacado { grid-column: span 2; }
        }
        @media (max-width: 600px) {
            .bento-gaming { grid-template-columns: 1fr; }
            .gamer-destacado { grid-column: span 1; }
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="contenedor header-flex">
            <div class="logo">Nexus<span>Tech</span></div>
            <nav>
                <a href="#videojuegos">Videojuegos</a>
                <a href="#tecnologia">Tecnología</a>
                <a href="#guias">Guías</a>
            </nav>
        </div>
    </header>

    <main class="contenedor">
        
        <section class="seccion-revista" id="videojuegos">
            <h2 class="titulo-seccion">
                Cultura Gaming
                <span class="dev-badge">Dev 1</span>
            </h2>
            <div class="bento-gaming">
                <article class="tarjeta-gamer gamer-destacado">
                    <span class="tag-juego">Steam / Reseña</span>
                    <h3>El resurgimiento del terror psicológico indie</h3>
                    <p>Análisis profundo de cómo los desarrolladores independientes están revolucionando la inmersión atmosférica y sonora en los últimos lanzamientos.</p>
                </article>
                <article class="tarjeta-gamer gamer-normal">
                    <span class="tag-juego">Simulación</span>
                    <h3>Gestión de recursos al límite</h3>
                    <p>Los simuladores de supervivencia más exigentes de la temporada.</p>
                </article>
                <article class="tarjeta-gamer gamer-normal">
                    <span class="tag-juego">Aventura / Acción</span>
                    <h3>Combate dinámico</h3>
                    <p>Evaluamos el impacto de las nuevas mecánicas de esquiva y *parry*.</p>
                </article>
            </div>
        </section>

        <section class="seccion-revista" id="tecnologia">
            <h2 class="titulo-seccion">
                Hardware e IA
                <span class="dev-badge">Dev 2</span>
            </h2>
            <div class="lista-tecnologia">
                <article class="tarjeta-tech">
                    <h3>💻 Optimizando la disipación térmica en setups compactos</h3>
                    <p>Análisis de rendimiento de los procesadores de última generación enfocados en equilibrar potencia y control de temperatura en placas base reducidas.</p>
                </article>
                <article class="tarjeta-tech">
                    <h3>🧠 Modelos de IA locales para asistencia en desarrollo</h3>
                    <p>Cómo implementar herramientas de lenguaje estructurado en tu propio entorno sin depender de la nube para potenciar la generación de código.</p>
                </article>
            </div>
        </section>

    </main>

    <?php wp_footer(); ?>
</body>
</html>
