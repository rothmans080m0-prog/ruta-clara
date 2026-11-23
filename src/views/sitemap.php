<?php
declare(strict_types=1);
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$urls = [['/', LAST_REVIEW]];
foreach (categories() as $slug => $c) {
    $urls[] = ['/' . $slug, LAST_REVIEW];
}
foreach (articles() as $a) {
    $urls[] = [$a['url'], $a['updated']];
}
foreach (pages() as $p) {
    $urls[] = ['/' . $p['slug'], LAST_REVIEW];
}
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as [$u, $d]): ?>
  <url><loc><?= e(abs_url($u)) ?></loc><lastmod><?= e($d) ?></lastmod></url>
<?php endforeach; ?>
</urlset>
