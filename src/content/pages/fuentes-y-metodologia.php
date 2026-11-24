<?php
return [
    'slug' => 'fuentes-y-metodologia',
    'title' => 'Fuentes y metodología',
    'description' => 'Fuentes oficiales y metodología de verificación que usa Guía de Pagos SOAT Colombia para tarifas, coberturas, normativa y procedimientos del SOAT.',
    'lead' => 'De dónde sale la información y cómo la verificamos.',
    'body' => <<<'HTML'
<h2>Fuentes prioritarias</h2>
<ul>
  <li><a href="https://www.superfinanciera.gov.co" rel="noopener" target="_blank">Superintendencia Financiera de Colombia</a>: tarifas máximas y vigilancia de aseguradoras.</li>
  <li><a href="https://www.mintransporte.gov.co" rel="noopener" target="_blank">Ministerio de Transporte</a>: política y normativa de tránsito, tasa RUNT.</li>
  <li><a href="https://www.runt.com.co" rel="noopener" target="_blank">RUNT</a>: registro nacional de tránsito y verificación de pólizas.</li>
  <li><a href="https://www.adres.gov.co" rel="noopener" target="_blank">ADRES</a>: recursos del sistema de salud y contribución del SOAT.</li>
  <li><a href="https://www.fasecolda.com" rel="noopener" target="_blank">Fasecolda</a>: información técnica y tabla de tarifas publicada para el sector.</li>
  <li>Normativa: Ley 769 de 2002 (Código Nacional de Tránsito), Estatuto Orgánico del Sistema Financiero y Decreto 780 de 2016.</li>
</ul>

<h2>Cómo verificamos</h2>
<ol>
  <li><strong>Datos numéricos (tarifas, topes, multas):</strong> los transcribimos de una publicación oficial o del sector y los comparamos con otras fuentes. Indicamos la fecha de revisión.</li>
  <li><strong>Procedimientos (consultas en el RUNT, ADRES):</strong> los describimos en términos generales, porque las plataformas cambian sus menús. Siempre enviamos al sitio oficial.</li>
  <li><strong>Normativa:</strong> citamos la norma y evitamos interpretaciones que no podamos respaldar.</li>
  <li><strong>Discrepancias:</strong> cuando las fuentes difieren (por ejemplo, en el valor en pesos de una multa), lo decimos de forma explícita.</li>
</ol>

<h2>Tarifas SOAT 2026</h2>
<p>Los valores provienen de la tabla de tarifas máximas comerciales 2026 publicada por Fasecolda, que cita la Circular Externa 022 de 2025 de la Superintendencia Financiera. Fecha de revisión: {{FECHA_REVISION}}. Consulta [[tarifas-soat-2026|la tabla completa]].</p>

<h2>Lo que no hacemos</h2>
<ul>
  <li>No accedemos a bases de datos oficiales ni afirmamos tener integraciones con ellas.</li>
  <li>No inventamos precios ni prometemos descuentos.</li>
  <li>No presentamos contenido distinto a buscadores y a visitantes.</li>
</ul>
HTML,
];
