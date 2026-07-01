<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revista Tech</title>
    
    <style>
        body { 
            font-family: sans-serif; 
            background-color: #0d0f14; 
            color: #ffffff; 
            padding: 40px; 
        }
        .contenedor { 
            max-width: 800px; 
            margin: 0 auto; 
            background: #161920; 
            padding: 30px; 
            border-radius: 12px; 
            border: 1px solid rgba(0, 240, 255, 0.15);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        .titulo-seccion {
            color: #00f0ff;
            display: flex;
            align-items: center;
            gap: 15px;
            border-bottom: 2px solid rgba(0, 240, 255, 0.2);
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .dev-badge { 
            background: #00f0ff; 
            color: #0d0f14; 
            padding: 3px 10px; 
            font-size: 13px; 
            font-weight: bold;
            border-radius: 6px; 
        }
        .tarjeta-tech {
            background: rgba(255, 255, 255, 0.03);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #00f0ff;
            margin-bottom: 20px;
        }
        .tarjeta-tech h3 {
            margin-top: 0;
            color: #ffffff;
        }
        .tarjeta-tech p {
            color: #b3b3b3;
            line-height: 1.6;
            margin-bottom: 0;
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <main class="contenedor">
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