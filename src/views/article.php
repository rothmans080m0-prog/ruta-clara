<?php
declare(strict_types=1);
$cats = categories();
$cat = $cats[$a['category']];
$body = expand_placeholders(link_internal($a['body']));
[$body, $toc] = add_toc($body);
$arts = articles();
$related = [];
foreach ($a['related'] ?? [] as $r) {
    if (isset($arts[$r])) {
        $related[] = $arts[$r];
    }
}
$jsonld = [
    [
        '@context' => 'https://schema.org', '@type' => 'Article',
        'headline' => $a['title'], 'description' => $a['description'],
        'inLanguage' => 'es-CO',
        'datePublished' => $a['published'], 'dateModified' => $a['updated'],
        'mainEntityOfPage' => abs_url($a['url']),
        'author' => ['@type' => 'Organization', 'name' => SITE_NAME . ' (equipo editorial)'],
        'publisher' => ['@type' => 'Organization', 'name' => SITE_NAME, 'logo' => ['@type' => 'ImageObject', 'url' => abs_url('/assets/img/logo.svg')]],
        'image' => [abs_url('/assets/img/og.png')],
    ],
    [
        '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => abs_url('/')],
            ['@type' => 'ListItem', 'position' => 2, 'name' => $cat['name'], 'item' => abs_url('/' . $a['category'])],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $a['title'], 'item' => abs_url($a['url'])],
        ],
    ],
];
if (!empty($a['faq'])) {
    $jsonld[] = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(
        fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])]],
        $a['faq']
    )];
}
?>
<article class="article">
  <header class="page-head">
    <div class="wrap narrow">
      <nav class="crumbs" aria-label="Migas de pan"><a href="/">Inicio</a> <span aria-hidden="true">/</span> <a href="/<?= e($a['category']) ?>"><?= e($cat['name']) ?></a> <span aria-hidden="true">/</span> <span>Artículo</span></nav>
      <h1><?= e($a['title']) ?></h1>
      <p class="lead"><?= e($a['summary']) ?></p>
      <p class="byline"><?= icon('clock', 16) ?> Actualizado el <time datetime="<?= e($a['updated']) ?>"><?= e(fecha_es($a['updated'])) ?></time> · Equipo editorial de <?= e(SITE_NAME) ?></p>
    </div>
  </header>

  <div class="wrap narrow article-body">
    <?php if (!empty($a['verification'])): ?>
    <aside class="verify" aria-label="Estado de verificación">
      <strong>Estado de verificación.</strong> <?= e($a['verification']) ?>
    </aside>
    <?php endif; ?>

    <?php if (count($toc) > 1): ?>
    <nav class="toc" aria-labelledby="toc-h">
      <h2 id="toc-h" class="toc-title">Índice de contenidos</h2>
      <ol>
        <?php foreach ($toc as $t): ?><li><a href="#<?= e($t['id']) ?>"><?= e($t['text']) ?></a></li><?php endforeach; ?>
        <?php if (!empty($a['faq'])): ?><li><a href="#preguntas-frecuentes">Preguntas frecuentes</a></li><?php endif; ?>
        <li><a href="#fuentes">Fuentes oficiales</a></li>
      </ol>
    </nav>
    <?php endif; ?>

    <div class="prose"><?= $body ?></div>

    <?php if (!empty($a['faq'])): ?>
    <section class="faq-block" aria-labelledby="preguntas-frecuentes">
      <h2 id="preguntas-frecuentes">Preguntas frecuentes</h2>
      <?php foreach ($a['faq'] as $f): ?>
      <details class="faq"><summary><?= e($f[0]) ?></summary><p><?= $f[1] ?></p></details>
      <?php endforeach; ?>
    </section>
    <?php endif; ?>

    <section class="sources-block" aria-labelledby="fuentes">
      <h2 id="fuentes">Fuentes oficiales</h2>
      <ul>
        <?php foreach ($a['sources'] as $s): ?>
        <li><a href="<?= e($s[1]) ?>" rel="noopener" target="_blank"><?= e($s[0]) ?> <?= icon('external', 14) ?></a></li>
        <?php endforeach; ?>
      </ul>
      <p class="small">Consultadas el <?= e(fecha_es(LAST_REVIEW)) ?>. Las normas y los valores pueden cambiar: confirma siempre en la fuente oficial antes de tomar decisiones.</p>
    </section>

    <?php if ($related): ?>
    <section class="related" aria-labelledby="relacionados">
      <h2 id="relacionados">Sigue leyendo</h2>
      <div class="cards cards-3">
        <?php foreach ($related as $r): ?>
        <article class="card"><p class="tag"><?= e($cats[$r['category']]['name']) ?></p><h3><a href="<?= e($r['url']) ?>"><?= e($r['title']) ?></a></h3></article>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endif; ?>

    <p class="disclaimer"><?= icon('info', 18) ?> Este contenido es informativo y no constituye asesoría legal, financiera ni de seguros. <?= e(SITE_NAME) ?> no vende ni expide pólizas.</p>
  </div>
</article>
