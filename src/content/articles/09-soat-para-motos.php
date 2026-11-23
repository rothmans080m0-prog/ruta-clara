<?php
return [
    'slug' => 'soat-para-motos',
    'category' => 'tarifas',
    'order' => 9,
    'featured' => false,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'SOAT para motos 2026: tarifas máximas por cilindraje',
    'description' => 'Tarifas máximas del SOAT 2026 para motos en Colombia por cilindraje: ciclomotor, menos de 100 c.c., 100 a 200 c.c., más de 200 c.c. y motocarros.',
    'summary' => 'Cuánto cuesta como máximo el SOAT de una moto en 2026 según su cilindraje y qué debes tener en cuenta al verificar tu categoría.',
    'verification' => 'Valores contrastados en tres documentos de tarifas 2026 (Fasecolda y publicaciones de aseguradoras) que coinciden con la Circular Externa 022 de 2025. Para motos eléctricas o casos especiales, confirma la categoría con la autoridad de tránsito.',
    'sources' => [
        ['Fasecolda: Tarifas máximas comerciales del SOAT 2026 (PDF)', 'https://www.fasecolda.com/wp-content/uploads/Tarifas-SOAT-2026-referencia.pdf'],
        ['Superintendencia Financiera de Colombia', 'https://www.superfinanciera.gov.co'],
        ['Ministerio de Transporte', 'https://www.mintransporte.gov.co'],
        ['RUNT', 'https://www.runt.com.co'],
    ],
    'related' => ['tarifas-soat-2026', 'soat-para-carros', 'multas-por-conducir-sin-soat'],
    'faq' => [
        ['¿Cómo sé el cilindraje de mi moto?', 'Aparece en la tarjeta de propiedad y en la información del vehículo en el RUNT.'],
        ['¿Los motocarros pagan lo mismo que las motos?', 'Tienen categorías propias (códigos 140 y 150) con una tarifa máxima distinta a la de las motos de dos ruedas.'],
        ['¿Una moto eléctrica necesita SOAT?', 'Depende de sus características y de la clasificación que aplique la autoridad de tránsito. Confírmalo en el Ministerio de Transporte o en tu organismo de tránsito.'],
    ],
    'body' => <<<'HTML'
<p>El valor del SOAT para una moto depende sobre todo de su <strong>cilindraje</strong>. Las tarifas son máximas y las fija la Superintendencia Financiera para cada año. Estos son los valores de 2026, revisados el <strong>{{FECHA_REVISION}}</strong>.</p>

<h2>Tarifas máximas 2026 para motos</h2>
{{TABLA_MOTOS}}
<p>Los valores incluyen la prima, la contribución a la ADRES y la tasa del RUNT. Para la tabla completa de todas las categorías ve a [[tarifas-soat-2026|Tarifas SOAT 2026]].</p>

<h2>Cómo identificar tu categoría</h2>
<ol>
  <li>Toma la tarjeta de propiedad de la moto.</li>
  <li>Busca el campo <strong>cilindraje</strong> (en centímetros cúbicos).</li>
  <li>Compáralo con los rangos de la tabla: menos de 100 c.c., de 100 a 200 c.c. o más de 200 c.c.</li>
  <li>Verifica que la clase corresponda a moto y no a motocarro, tricimoto o cuatrimoto.</li>
</ol>

<h2>Por qué el SOAT es especialmente importante para motociclistas</h2>
<p>El SOAT cubre a conductores y acompañantes sin importar la responsabilidad del accidente. Esto incluye atención médica, indemnizaciones y gastos funerarios dentro de los topes de ley (detalle en [[que-cubre-el-soat|qué cubre el SOAT]]).</p>

<h2>Qué pasa si circulas sin SOAT</h2>
<p>La conducta es una infracción con multa e inmovilización del vehículo. Revisa la información en [[multas-por-conducir-sin-soat|multas por conducir sin SOAT]].</p>

<h2>Consejos para renovar a tiempo</h2>
<ul>
  <li>Verifica la fecha de fin de tu póliza en el RUNT ([[como-verificar-si-el-soat-esta-vigente|guía de vigencia]]).</li>
  <li>Compra únicamente con aseguradoras autorizadas y guarda el comprobante.</li>
  <li>Comprueba que el SOAT quedó registrado a nombre de la placa correcta.</li>
</ul>
<div class="callout">
  <p>Ruta Clara no vende SOAT ni cotiza. Esta información es una referencia para que sepas el tope que puede cobrarte la aseguradora.</p>
</div>
HTML,
];
