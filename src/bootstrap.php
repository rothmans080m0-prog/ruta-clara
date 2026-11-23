<?php
declare(strict_types=1);

define('ROOT', dirname(__DIR__));
const SITE_NAME = 'Ruta Clara';
const SITE_TAGLINE = 'Portal informativo independiente sobre el SOAT en Colombia';
const LAST_REVIEW = '2026-11-23';

require_once ROOT . '/src/views/icons.php';

/* ---------- Utilidades ---------- */

function env(string $k, ?string $d = null): ?string
{
    $v = getenv($k);
    return ($v === false || $v === '') ? $d : $v;
}

function e(?string $s): string
{
    return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function site_url(): string
{
    $c = env('SITE_URL');
    if ($c) {
        return rtrim($c, '/');
    }
    $https = (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https') || (($_SERVER['HTTPS'] ?? '') === 'on');
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    if (!preg_match('/^[a-z0-9.\-]+(:\d+)?$/i', $host)) {
        $host = 'localhost';
    }
    return ($https ? 'https' : 'http') . '://' . $host;
}

function abs_url(string $path): string
{
    return site_url() . '/' . ltrim($path, '/');
}

function fecha_es(string $iso): string
{
    $m = ['', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
    [$y, $mo, $d] = array_map('intval', explode('-', $iso));
    return $d . ' de ' . $m[$mo] . ' de ' . $y;
}

function cop(int $n): string
{
    return '$' . number_format($n, 0, ',', '.');
}

function slugify(string $s): string
{
    $s = mb_strtolower($s, 'UTF-8');
    $s = strtr($s, ['á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u', 'ü' => 'u', 'ñ' => 'n']);
    $s = preg_replace('/[^a-z0-9]+/', '-', $s) ?? '';
    return trim($s, '-');
}

/* ---------- Datos ---------- */

function categories(): array
{
    return [
        'informacion-general' => ['name' => 'Información general', 'desc' => 'Qué es el SOAT, para qué sirve, qué cubre y qué no cubre.', 'icon' => 'shield'],
        'consultas' => ['name' => 'Consultas', 'desc' => 'Cómo consultar y verificar el SOAT en las plataformas oficiales (RUNT, ADRES).', 'icon' => 'search'],
        'tarifas' => ['name' => 'Tarifas', 'desc' => 'Tarifas máximas 2026 por tipo de vehículo, con fuente y fecha.', 'icon' => 'tag'],
        'normativa' => ['name' => 'Normativa', 'desc' => 'Obligaciones, vigencia, sanciones y normas aplicables.', 'icon' => 'scale'],
        'guias' => ['name' => 'Guías', 'desc' => 'Pasos prácticos y preguntas frecuentes.', 'icon' => 'route'],
    ];
}

function articles(): array
{
    static $all = null;
    if ($all === null) {
        $all = [];
        foreach (glob(ROOT . '/src/content/articles/*.php') ?: [] as $f) {
            $a = require $f;
            $a['url'] = '/' . $a['category'] . '/' . $a['slug'];
            $all[$a['slug']] = $a;
        }
        uasort($all, fn($x, $y) => [$x['order'] ?? 99, $x['slug']] <=> [$y['order'] ?? 99, $y['slug']]);
    }
    return $all;
}

function pages(): array
{
    static $all = null;
    if ($all === null) {
        $all = [];
        foreach (glob(ROOT . '/src/content/pages/*.php') ?: [] as $f) {
            $p = require $f;
            $all[$p['slug']] = $p;
        }
    }
    return $all;
}

function tarifas(): array
{
    static $t = null;
    return $t ??= require ROOT . '/src/data/tarifas.php';
}

/* ---------- Plantillas ---------- */

function render(string $view, array $vars = []): void
{
    extract($vars, EXTR_SKIP);
    ob_start();
    require ROOT . '/src/views/' . $view . '.php';
    $content = ob_get_clean();
    require ROOT . '/src/views/layout.php';
}

/** Convierte [[slug|texto]] en enlaces internos. */
function link_internal(string $html): string
{
    $arts = articles();
    return preg_replace_callback('/\[\[([a-z0-9\-]+)\|([^\]]+)\]\]/', function ($m) use ($arts) {
        if (!isset($arts[$m[1]])) {
            return $m[2];
        }
        return '<a href="' . e($arts[$m[1]]['url']) . '">' . $m[2] . '</a>';
    }, $html) ?? $html;
}

/** Añade id a los h2 y devuelve [html, toc]. */
function add_toc(string $html): array
{
    $toc = [];
    $html = preg_replace_callback('/<h2>(.*?)<\/h2>/s', function ($m) use (&$toc) {
        $id = slugify(strip_tags($m[1]));
        $toc[] = ['id' => $id, 'text' => strip_tags($m[1])];
        return '<h2 id="' . $id . '">' . $m[1] . '</h2>';
    }, $html) ?? $html;
    return [$html, $toc];
}

function tabla_tarifas_html(string $grupo = 'todas'): string
{
    $out = '';
    foreach (tarifas()['grupos'] as $g) {
        $esMoto = $g['slug'] === 'motos';
        if ($grupo === 'motos' && !$esMoto) {
            continue;
        }
        if ($grupo === 'carros' && !in_array($g['slug'], ['autos-familiares', 'camperos-camionetas', 'seis-o-mas-pasajeros', 'autos-negocios-taxis'], true)) {
            continue;
        }
        $out .= '<div class="table-wrap"><table class="tbl"><caption>' . e($g['nombre']) . '</caption>'
            . '<thead><tr><th scope="col">Código</th><th scope="col">Categoría</th><th scope="col" class="num">Total a pagar (COP)</th></tr></thead><tbody>';
        foreach ($g['filas'] as $r) {
            $out .= '<tr><td>' . e((string)$r[0]) . '</td><td>' . e($r[1]) . '</td><td class="num">' . cop($r[2]) . '</td></tr>';
        }
        $out .= '</tbody></table></div>';
    }
    return $out;
}

function expand_placeholders(string $html): string
{
    return strtr($html, [
        '{{TABLA_TARIFAS}}' => tabla_tarifas_html('todas'),
        '{{TABLA_MOTOS}}' => tabla_tarifas_html('motos'),
        '{{TABLA_CARROS}}' => tabla_tarifas_html('carros'),
        '{{FECHA_REVISION}}' => fecha_es(LAST_REVIEW),
    ]);
}

/* ---------- Respuestas ---------- */

function redirect(string $to, int $code = 301): never
{
    header('Location: ' . $to, true, $code);
    exit;
}

function not_found(): never
{
    http_response_code(404);
    header('X-Robots-Tag: noindex');
    render('404', [
        'title' => 'Página no encontrada',
        'description' => 'La página que buscas no existe en ' . SITE_NAME . '.',
        'noindex' => true,
    ]);
    exit;
}

/* ---------- Enrutador ---------- */

function route(): void
{
    $path = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
    if ($path !== '/' && substr($path, -1) === '/') {
        redirect(rtrim($path, '/') . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : ''));
    }
    $seg = array_values(array_filter(explode('/', $path), 'strlen'));
    $n = count($seg);
    $cats = categories();
    $arts = articles();

    if ($n === 0) {
        render('home', [
            'title' => SITE_NAME . ' | Información independiente sobre el SOAT en Colombia',
            'description' => 'Guías claras y verificadas sobre el SOAT en Colombia: qué cubre, cómo consultarlo, tarifas 2026 y normativa. Portal informativo independiente, no oficial.',
            'canonical' => '/',
            'home' => true,
        ]);
        return;
    }

    if ($n === 1) {
        $s = $seg[0];
        if ($s === 'sitemap.xml') {
            header('Content-Type: application/xml; charset=utf-8');
            require ROOT . '/src/views/sitemap.php';
            return;
        }
        if ($s === 'robots.txt') {
            header('Content-Type: text/plain; charset=utf-8');
            echo "User-agent: *\nAllow: /\nDisallow: /buscar\n\nSitemap: " . abs_url('/sitemap.xml') . "\n";
            return;
        }
        if ($s === 'buscar') {
            $q = trim((string)($_GET['q'] ?? ''));
            $q = mb_substr($q, 0, 80);
            $results = [];
            if (mb_strlen($q) >= 2) {
                $needle = slugify($q);
                $words = array_filter(explode('-', $needle));
                foreach ($arts as $a) {
                    $hay = slugify($a['title'] . ' ' . $a['summary'] . ' ' . strip_tags($a['body']));
                    $score = 0;
                    foreach ($words as $w) {
                        if (str_contains($hay, $w)) {
                            $score++;
                        }
                        if (str_contains(slugify($a['title']), $w)) {
                            $score += 2;
                        }
                    }
                    if ($score >= max(1, count($words))) {
                        $results[] = [$score, $a];
                    }
                }
                usort($results, fn($x, $y) => $y[0] <=> $x[0]);
                $results = array_map(fn($r) => $r[1], $results);
            }
            render('search', [
                'title' => $q !== '' ? 'Resultados para «' . $q . '»' : 'Buscar en ' . SITE_NAME,
                'description' => 'Buscador interno de ' . SITE_NAME . '.',
                'q' => $q, 'results' => $results, 'noindex' => true,
            ]);
            return;
        }
        if (isset($cats[$s])) {
            $list = array_values(array_filter($arts, fn($a) => $a['category'] === $s));
            render('category', [
                'title' => $cats[$s]['name'] . ' sobre el SOAT en Colombia',
                'description' => $cats[$s]['desc'],
                'canonical' => '/' . $s,
                'slug' => $s, 'cat' => $cats[$s], 'list' => $list,
            ]);
            return;
        }
        $pgs = pages();
        if (isset($pgs[$s])) {
            render('page', [
                'title' => $pgs[$s]['title'],
                'description' => $pgs[$s]['description'],
                'canonical' => '/' . $s,
                'page' => $pgs[$s],
            ]);
            return;
        }
        not_found();
    }

    if ($n === 2 && isset($cats[$seg[0]])) {
        $a = $arts[$seg[1]] ?? null;
        if ($a && $a['category'] === $seg[0]) {
            render('article', [
                'title' => $a['title'],
                'description' => $a['description'],
                'canonical' => $a['url'],
                'a' => $a,
                'og_type' => 'article',
            ]);
            return;
        }
    }
    not_found();
}
