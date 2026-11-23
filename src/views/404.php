<?php
declare(strict_types=1);
$cats = categories();
?>
<section class="page-head">
  <div class="wrap narrow">
    <p class="eyebrow">Error 404</p>
    <h1>No encontramos esta página</h1>
    <p class="lead">Puede que el enlace haya cambiado o que la dirección esté mal escrita.</p>
    <form class="hero-search" action="/buscar" method="get" role="search">
      <label class="sr" for="q-404">Buscar</label>
      <input id="q-404" name="q" type="search" placeholder="Busca un tema…" maxlength="80">
      <button class="btn" type="submit">Buscar</button>
    </form>
    <ul class="chips">
      <?php foreach ($cats as $slug => $c): ?><li><a href="/<?= e($slug) ?>"><?= e($c['name']) ?></a></li><?php endforeach; ?>
    </ul>
  </div>
</section>
