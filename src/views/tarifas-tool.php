<?php
declare(strict_types=1);
$t = tarifas();
$data = [];
foreach ($t['grupos'] as $g) {
    $data[] = ['g' => $g['nombre'], 'f' => array_map(fn($r) => ['c' => $r[0], 'd' => $r[1], 'v' => $r[2]], $g['filas'])];
}
?>
<div class="tool" id="calculadora-tarifas">
  <h2 class="h3">Consulta la tarifa máxima 2026 de tu categoría</h2>
  <p class="tool-note">Herramienta de referencia: muestra la tarifa máxima publicada por la Superintendencia Financiera. <strong>No es una cotización ni una oferta.</strong> El valor final lo confirma la aseguradora autorizada.</p>
  <div class="tool-row">
    <div class="field">
      <label for="t-grupo">Tipo de vehículo</label>
      <select id="t-grupo"></select>
    </div>
    <div class="field">
      <label for="t-cat">Categoría</label>
      <select id="t-cat"></select>
    </div>
    <div class="tool-result" aria-live="polite">
      <span class="tool-label">Tarifa máxima 2026 (total a pagar)</span>
      <strong id="t-valor">—</strong>
      <span class="tool-sub">Incluye contribución ADRES y tasa RUNT · Fuente: <?= e($t['fuente']) ?> · Revisado el <?= e(fecha_es($t['revision'])) ?></span>
    </div>
  </div>
  <script type="application/json" id="tarifas-data"><?= json_encode($data, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
</div>
