<?php
declare(strict_types=1);
$cats = categories();
$jsonld = [[
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => abs_url('/')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $cat['name'], 'item' => abs_url('/' . $slug)],
    ],
]];
?>
<section class="page-head">
  <div class="wrap">
    <nav class="crumbs" aria-label="Migas de pan"><a href="/">Inicio</a> <span aria-hidden="true">/</span> <span><?= e($cat['name']) ?></span></nav>
    <h1><?= e($cat['name']) ?></h1>
    <p class="lead"><?= e($cat['desc']) ?></p>
  </div>
</section>
<section class="section">
  <div class="wrap">
    <?php if ($slug === 'tarifas'): require __DIR__ . '/tarifas-tool.php'; endif; ?>
    <div class="cards cards-3">
      <?php foreach ($list as $a): ?>
      <article class="card card-feature">
        <h2 class="h3"><a href="<?= e($a['url']) ?>"><?= e($a['title']) ?></a></h2>
        <p><?= e($a['summary']) ?></p>
        <p class="card-meta"><?= icon('clock', 16) ?> Actualizado el <?= e(fecha_es($a['updated'])) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
    <p class="more-link"><a href="/">Volver a la portada</a></p>
  </div>
</section>
