<?php
declare(strict_types=1);
$jsonld = [[
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => abs_url('/')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $page['title'], 'item' => abs_url('/' . $page['slug'])],
    ],
]];
$body = expand_placeholders(link_internal($page['body']));
?>
<section class="page-head">
  <div class="wrap narrow">
    <nav class="crumbs" aria-label="Migas de pan"><a href="/">Inicio</a> <span aria-hidden="true">/</span> <span><?= e($page['title']) ?></span></nav>
    <h1><?= e($page['title']) ?></h1>
    <?php if (!empty($page['lead'])): ?><p class="lead"><?= e($page['lead']) ?></p><?php endif; ?>
  </div>
</section>
<div class="wrap narrow article-body">
  <div class="prose"><?= $body ?></div>
</div>
