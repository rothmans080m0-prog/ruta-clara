<?php
declare(strict_types=1);
$cats = categories();
?>
<section class="page-head">
  <div class="wrap narrow">
    <h1>Buscar en <?= e(SITE_NAME) ?></h1>
    <form class="hero-search" action="/buscar" method="get" role="search">
      <label class="sr" for="q-page">Buscar</label>
      <input id="q-page" name="q" type="search" value="<?= e($q) ?>" placeholder="Ej.: tarifas motos" maxlength="80">
      <button class="btn" type="submit">Buscar</button>
    </form>
  </div>
</section>
<div class="wrap narrow section">
  <?php if ($q === ''): ?>
    <p>Escribe al menos dos letras para buscar entre los artículos del portal.</p>
  <?php elseif (!$results): ?>
    <p>No encontramos resultados para <strong>«<?= e($q) ?>»</strong>. Prueba con otras palabras o explora las <a href="/">categorías</a>.</p>
  <?php else: ?>
    <p class="muted"><?= count($results) ?> resultado<?= count($results) === 1 ? '' : 's' ?> para <strong>«<?= e($q) ?>»</strong></p>
    <ul class="post-list">
      <?php foreach ($results as $a): ?>
      <li><a href="<?= e($a['url']) ?>"><?= e($a['title']) ?></a><span class="post-meta"><?= e($cats[$a['category']]['name']) ?> · <?= e($a['summary']) ?></span></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
