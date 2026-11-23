<?php
declare(strict_types=1);
$cats = categories();
$arts = articles();
$featured = array_slice(array_values(array_filter($arts, fn($a) => !empty($a['featured']))), 0, 3);
$latest = $arts;
uasort($latest, fn($x, $y) => strcmp($y['updated'], $x['updated']) ?: ($x['order'] ?? 99) <=> ($y['order'] ?? 99));
$latest = array_slice(array_values($latest), 0, 6);

$faq = [
    ['¿Guía SOAT Colombia vende o renueva el SOAT?', 'No. Guía SOAT Colombia es un portal informativo independiente. No vende, expide ni renueva pólizas, no recibe pagos y no solicita datos bancarios. El SOAT solo lo expiden las aseguradoras autorizadas.'],
    ['¿Pueden consultar mi SOAT en este sitio?', 'No. Este portal no tiene acceso a bases de datos oficiales. Te explicamos cómo hacer la consulta en las plataformas oficiales, como el RUNT, y te enlazamos a ellas.'],
    ['¿Cuánto cuesta el SOAT en 2026?', 'El valor depende de la categoría del vehículo. En la sección de tarifas publicamos las tarifas máximas 2026 con su fuente y fecha de revisión. El precio exacto lo confirma la aseguradora autorizada.'],
    ['¿Qué pasa si conduzco sin SOAT vigente?', 'Es una infracción de tránsito que implica multa e inmovilización del vehículo. Detallamos el marco legal y los valores de referencia en nuestra guía sobre multas.'],
    ['¿Cómo sé que la información es confiable?', 'Cada artículo indica fuentes oficiales y la fecha de revisión. Si algo no pudimos verificar en una fuente oficial, lo marcamos de forma visible.'],
];
$jsonld = [
    ['@context' => 'https://schema.org', '@type' => 'WebSite', 'name' => SITE_NAME, 'url' => abs_url('/'), 'inLanguage' => 'es-CO',
        'potentialAction' => ['@type' => 'SearchAction', 'target' => abs_url('/buscar') . '?q={search_term_string}', 'query-input' => 'required name=search_term_string']],
    ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faq)],
];
?>
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-copy">
      <p class="eyebrow">Portal informativo independiente</p>
      <h1>El SOAT en Colombia, explicado con claridad y con fuentes oficiales</h1>
      <p class="lead">Qué cubre, cómo consultarlo en las plataformas oficiales, tarifas 2026 y normativa. Sin letra pequeña y sin vender nada.</p>
      <form class="hero-search" action="/buscar" method="get" role="search">
        <label class="sr" for="q-hero">Buscar información sobre el SOAT</label>
        <input id="q-hero" name="q" type="search" placeholder="Ej.: vigencia, motos, multas, RUNT…" maxlength="80" autocomplete="off">
        <button class="btn" type="submit">Buscar</button>
      </form>
      <ul class="chips" aria-label="Accesos rápidos">
        <li><a href="/tarifas/tarifas-soat-2026">Tarifas 2026</a></li>
        <li><a href="/guias/como-verificar-si-el-soat-esta-vigente">Verificar vigencia</a></li>
        <li><a href="/informacion-general/que-cubre-el-soat">Qué cubre</a></li>
        <li><a href="/normativa/multas-por-conducir-sin-soat">Multas</a></li>
      </ul>
    </div>
    <div class="hero-art"><img src="/assets/img/hero.svg" width="560" height="440" alt="Ilustración de una carretera, un escudo de protección y un mapa" fetchpriority="high"></div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head"><h2>Artículos destacados</h2><p>Las preguntas más frecuentes, respondidas con detalle.</p></div>
    <div class="cards cards-3">
      <?php foreach ($featured as $a): ?>
      <article class="card card-feature">
        <p class="tag"><?= e($cats[$a['category']]['name']) ?></p>
        <h3><a href="<?= e($a['url']) ?>"><?= e($a['title']) ?></a></h3>
        <p><?= e($a['summary']) ?></p>
        <p class="card-meta"><?= icon('clock', 16) ?> Actualizado el <?= e(fecha_es($a['updated'])) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="wrap">
    <div class="section-head"><h2>Explora por categorías</h2><p>Todo el contenido organizado por tema.</p></div>
    <div class="cards cards-5">
      <?php foreach ($cats as $slug => $c): ?>
      <a class="card card-cat" href="/<?= e($slug) ?>">
        <span class="cat-icon"><?= icon($c['icon'], 28) ?></span>
        <h3><?= e($c['name']) ?></h3>
        <p><?= e($c['desc']) ?></p>
        <span class="more">Ver sección <?= icon('arrow', 16) ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap two-col">
    <div>
      <div class="section-head"><h2>Últimas publicaciones</h2></div>
      <ul class="post-list">
        <?php foreach ($latest as $a): ?>
        <li>
          <a href="<?= e($a['url']) ?>"><?= e($a['title']) ?></a>
          <span class="post-meta"><?= e($cats[$a['category']]['name']) ?> · <?= e(fecha_es($a['updated'])) ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <aside class="sources-box" aria-labelledby="fuentes-h">
      <h2 id="fuentes-h">Fuentes de consulta oficiales</h2>
      <p>Para consultas y trámites, usa siempre los sitios oficiales:</p>
      <ul class="src-list">
        <li><a href="https://www.runt.com.co" rel="noopener" target="_blank">RUNT <?= icon('external', 14) ?></a><span>Registro Único Nacional de Tránsito</span></li>
        <li><a href="https://www.adres.gov.co" rel="noopener" target="_blank">ADRES <?= icon('external', 14) ?></a><span>Administradora de los Recursos del Sistema de Salud</span></li>
        <li><a href="https://www.superfinanciera.gov.co" rel="noopener" target="_blank">Superintendencia Financiera <?= icon('external', 14) ?></a><span>Vigila a las aseguradoras y fija las tarifas máximas</span></li>
        <li><a href="https://www.mintransporte.gov.co" rel="noopener" target="_blank">Ministerio de Transporte <?= icon('external', 14) ?></a><span>Política y normativa de tránsito</span></li>
        <li><a href="https://www.fasecolda.com" rel="noopener" target="_blank">Fasecolda <?= icon('external', 14) ?></a><span>Federación de Aseguradores Colombianos</span></li>
      </ul>
    </aside>
  </div>
</section>

<section class="section section-alt">
  <div class="wrap narrow">
    <div class="section-head"><h2>Preguntas frecuentes</h2></div>
    <?php foreach ($faq as $f): ?>
    <details class="faq"><summary><?= e($f[0]) ?></summary><p><?= e($f[1]) ?></p></details>
    <?php endforeach; ?>
    <p class="more-link"><a href="/guias/preguntas-frecuentes-sobre-el-soat">Ver todas las preguntas frecuentes <?= icon('arrow', 16) ?></a></p>
  </div>
</section>
