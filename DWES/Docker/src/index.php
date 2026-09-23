<?php
// Configuración básica
$ignorar = ['.', '..', 'index.php']; // Archivos/carpetas a ocultar
$elementos = scandir(__DIR__);

// Separamos en carpetas y archivos sueltos
$carpetas = [];
$archivosSueltos = [];

foreach ($elementos as $item) {
    if (in_array($item, $ignorar)) continue;
    
    $rutaCompleta = __DIR__ . '/' . $item;
    
    if (is_dir($rutaCompleta)) {
        // Leemos los ficheros de la subcarpeta
        $ficherosCarpeta = scandir($rutaCompleta);
        $phpFiles = [];
        foreach ($ficherosCarpeta as $f) {
            if ($f === '.' || $f === '..') continue;
            if (pathinfo($f, PATHINFO_EXTENSION) === 'php') {
                $phpFiles[] = $f;
            }
        }
        $carpetas[$item] = $phpFiles;
    } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
        $archivosSueltos[] = $item;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entorno DWES - Índice de Prácticas</title>
    <style>
        :root {
            --bg: #121214;
            --card-bg: #202024;
            --text: #e1e1e6;
            --text-muted: #a8a8b3;
            --primary: #8257e6;
            --primary-hover: #9466ff;
            --border: #323238;
        }
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 2.5rem 1rem;
            display: flex;
            justify-content: center;
        }
        .container {
            width: 100%;
            max-width: 850px;
        }
        header {
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h1 { margin: 0; font-size: 1.8rem; color: #fff; }
        .links-utiles a {
            background-color: var(--card-bg);
            color: var(--text);
            text-decoration: none;
            padding: 0.5rem 0.9rem;
            border-radius: 6px;
            font-size: 0.85rem;
            border: 1px solid var(--border);
            transition: all 0.2s;
        }
        .links-utiles a:hover {
            border-color: var(--primary);
            color: #fff;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }
        .card {
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 1.2rem;
            display: flex;
            flex-direction: column;
        }
        .card h2 {
            margin: 0 0 1rem 0;
            font-size: 1.15rem;
            color: var(--primary-hover);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        ul { list-style: none; padding: 0; margin: 0; }
        li { margin-bottom: 0.5rem; }
        li a {
            color: var(--text);
            text-decoration: none;
            display: block;
            padding: 0.45rem 0.6rem;
            border-radius: 5px;
            background: rgba(255,255,255,0.02);
            border: 1px solid transparent;
            transition: all 0.2s ease;
            font-family: monospace;
            font-size: 0.9rem;
        }
        li a:hover {
            background-color: rgba(130, 87, 230, 0.15);
            border-color: var(--primary);
            color: #fff;
            transform: translateX(4px);
        }
        .empty {
            color: var(--text-muted);
            font-size: 0.85rem;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div>
            <h1>Dashboard DWES</h1>
            <p style="margin: 0.3rem 0 0; color: var(--text-muted); font-size: 0.9rem;">
                Explorador automático de archivos y prácticas
            </p>
        </div>
        <div class="links-utiles">
            <a href="http://localhost:8081" target="_blank">🗄️ Abrir phpMyAdmin</a>
        </div>
    </header>

    <main class="grid">
        <!-- Carpetas detectadas dinámicamente (Clase, IA, etc.) -->
        <?php foreach ($carpetas as $carpeta => $archivos): ?>
            <div class="card">
                <h2>📁 <?= htmlspecialchars($carpeta) ?></h2>
                <?php if (empty($archivos)): ?>
                    <p class="empty">Carpeta vacía (sin .php)</p>
                <?php else: ?>
                    <ul>
                        <?php foreach ($archivos as $archivo): ?>
                            <li>
                                <a href="<?= rawurlencode($carpeta) ?>/<?= rawurlencode($archivo) ?>">
                                    📄 <?= htmlspecialchars($archivo) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

        <!-- Archivos sueltos en la raíz de src (como db_test.php) -->
        <?php if (!empty($archivosSueltos)): ?>
            <div class="card">
                <h2>🛠️ Raíz (src)</h2>
                <ul>
                    <?php foreach ($archivosSueltos as $archivo): ?>
                        <li>
                            <a href="<?= rawurlencode($archivo) ?>">
                                ⚙️ <?= htmlspecialchars($archivo) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </main>
</div>

</body>
</html>