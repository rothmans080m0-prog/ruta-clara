<?php
declare(strict_types=1);
require_once __DIR__ . '/icons.php';

$canonical = $canonical ?? null;
$noindex = $noindex ?? false;
$og_type = $og_type ?? 'website';
$fullTitle = (isset($home) && $home) ? $title : $title . ' | ' . SITE_NAME;
$jsonld = $jsonld ?? [];
$ga = env('GA_MEASUREMENT_ID', '');
$cats = categories();
$ogImage = abs_url('/assets/img/og.png');
?><!DOCTYPE html>
<html lang="es-CO">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($fullTitle) ?></title>
<meta name="description" content="<?= e($description) ?>">
<?php if ($noindex): ?><meta name="robots" content="noindex, follow">
<?php else: ?><meta name="robots" content="index, follow, max-image-preview:large">
<?php endif; ?>
<?php if ($canonical): ?><link rel="canonical" href="<?= e(abs_url($canonical)) ?>">
<?php endif; ?>
<meta name="theme-color" content="#0f2a3d">
<link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
<meta property="og:locale" content="es_CO">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:type" content="<?= e($og_type) ?>">
<meta property="og:title" content="<?= e($fullTitle) ?>">
<meta property="og:description" content="<?= e($description) ?>">
<?php if ($canonical): ?><meta property="og:url" content="<?= e(abs_url($canonical)) ?>">
<?php endif; ?>
<meta property="og:image" content="<?= e($ogImage) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= e(SITE_NAME) ?>: información independiente sobre el SOAT en Colombia">
<meta name="twitter:card" content="summary_large_image">
<link rel="stylesheet" href="/assets/css/style.css?v=1">
<?php foreach ($jsonld as $block): ?>
<script type="application/ld+json"><?= json_encode($block, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
<?php endforeach; ?>
</head>
<body data-ga="<?= e($ga) ?>">
<a class="skip" href="#contenido">Saltar al contenido</a>
<div class="notice-bar" role="note">
  <div class="wrap">Portal informativo independiente. <strong>No es una aseguradora, no vende pólizas y no es una entidad oficial.</strong></div>
</div>
<header class="site-header">
  <div class="wrap header-row">
    <a class="brand" href="/" aria-label="<?= e(SITE_NAME) ?> - inicio">
      <img src="/assets/img/logo.svg" width="40" height="40" alt="">
      <span class="brand-text"><span class="brand-name"><?= e(SITE_NAME) ?></span><span class="brand-sub">Información sobre el SOAT</span></span>
    </a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-principal" aria-label="Abrir menú"><?= icon('menu') ?></button>
    <nav id="nav-principal" class="nav" aria-label="Principal">
      <ul>
        <?php foreach ($cats as $slug => $c): ?>
        <li><a href="/<?= e($slug) ?>"<?= (($canonical ?? '') === '/' . $slug) ? ' aria-current="page"' : '' ?>><?= e($c['name']) ?></a></li>
        <?php endforeach; ?>
      </ul>
      <form class="nav-search" action="/buscar" method="get" role="search">
        <label class="sr" for="q-nav">Buscar en el portal</label>
        <input id="q-nav" name="q" type="search" placeholder="Buscar…" maxlength="80" autocomplete="off">
        <button type="submit" aria-label="Buscar"><?= icon('search', 20) ?></button>
      </form>
    </nav>
  </div>
</header>

<main id="contenido">
<?= $content ?>
</main>

<footer class="site-footer">
  <div class="wrap footer-grid">
    <div>
      <a class="brand brand-light" href="/"><img src="/assets/img/logo.svg" width="36" height="36" alt=""><span class="brand-text"><span class="brand-name"><?= e(SITE_NAME) ?></span></span></a>
      <p class="muted-light">Portal editorial independiente sobre el SOAT en Colombia. Contenido educativo, con fuentes oficiales y fecha de revisión.</p>
    </div>
    <div>
      <h2 class="footer-h">Contenido</h2>
      <ul class="footer-list">
        <?php foreach ($cats as $slug => $c): ?><li><a href="/<?= e($slug) ?>"><?= e($c['name']) ?></a></li><?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h2 class="footer-h">Transparencia</h2>
      <ul class="footer-list">
        <li><a href="/informacion-editorial">Información editorial</a></li>
        <li><a href="/fuentes-y-metodologia">Fuentes y metodología</a></li>
        <li><a href="/contacto">Contacto</a></li>
        <li><a href="/aviso-legal">Aviso legal</a></li>
      </ul>
    </div>
    <div>
      <h2 class="footer-h">Legal</h2>
      <ul class="footer-list">
        <li><a href="/politica-de-privacidad">Política de privacidad</a></li>
        <li><a href="/politica-de-cookies">Política de cookies</a></li>
        <li><a href="/terminos-de-uso">Términos de uso</a></li>
        <li><button type="button" class="linklike" data-cookie-settings>Preferencias de cookies</button></li>
      </ul>
    </div>
  </div>
  <div class="wrap footer-legal">
    <p><strong>Aviso:</strong> <?= e(SITE_NAME) ?> no es una aseguradora ni un intermediario de seguros, no vende, expide ni renueva pólizas, no recibe pagos y no solicita datos bancarios. No está afiliado al Gobierno de Colombia, RUNT, ADRES, Fasecolda ni a ninguna aseguradora. Para trámites y consultas oficiales utiliza siempre los sitios de las entidades.</p>
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?> · Última revisión editorial: <?= e(fecha_es(LAST_REVIEW)) ?></p>
  </div>
</footer>

<div id="cookie-banner" class="cookie" role="dialog" aria-live="polite" aria-label="Aviso de cookies" hidden>
  <p>Usamos cookies necesarias para que el sitio funcione y, <strong>solo si las aceptas</strong>, cookies de analítica (Google Analytics) para saber qué contenidos son útiles. <a href="/politica-de-cookies">Más información</a>.</p>
  <div class="cookie-actions">
    <button type="button" class="btn btn-ghost" data-consent="necessary">Solo necesarias</button>
    <button type="button" class="btn" data-consent="all">Aceptar analítica</button>
  </div>
</div>
<script src="/assets/js/app.js?v=1" defer></script>
</body>
</html>
