<?php
return [
    'slug' => 'soat-para-carros',
    'category' => 'tarifas',
    'order' => 10,
    'featured' => false,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'SOAT para carros 2026: tarifas por cilindraje y antigüedad',
    'description' => 'Tarifas máximas del SOAT 2026 para autos familiares, camperos, camionetas, vehículos de seis o más pasajeros y taxis, por cilindraje y antigüedad.',
    'summary' => 'Cómo cambia la tarifa máxima del SOAT 2026 para carros según su clase, cilindraje y antigüedad, y cómo ubicar tu categoría.',
    'verification' => 'Valores transcritos de la tabla 2026 de Fasecolda (Circular Externa 022 de 2025, Superintendencia Financiera). Revisado el 23 de noviembre de 2026. Son tarifas máximas.',
    'sources' => [
        ['Fasecolda: Tarifas máximas comerciales del SOAT 2026 (PDF)', 'https://www.fasecolda.com/wp-content/uploads/Tarifas-SOAT-2026-referencia.pdf'],
        ['Superintendencia Financiera de Colombia', 'https://www.superfinanciera.gov.co'],
        ['RUNT', 'https://www.runt.com.co'],
    ],
    'related' => ['tarifas-soat-2026', 'soat-para-motos', 'como-consultar-el-soat-por-placa'],
    'faq' => [
        ['¿Qué significa "0 a 9 años" y "10 años o más"?', 'Es la antigüedad del vehículo según su modelo. Los vehículos de 10 años o más tienen una tarifa máxima superior en las categorías donde se distingue.'],
        ['¿Mi camioneta es "automóvil familiar" o "campero y camioneta"?', 'Depende de la clase registrada en la tarjeta de propiedad. Son categorías distintas con tarifas distintas; verifica la clase exacta antes de comparar valores.'],
        ['¿Los taxis pagan lo mismo que los carros particulares?', 'No. Los autos de negocios y taxis tienen su propia categoría y tarifas máximas.'],
    ],
    'body' => <<<'HTML'
<p>Para los carros, la tarifa máxima del SOAT depende de tres factores: la <strong>clase de vehículo</strong> (auto familiar, campero o camioneta, vehículo de seis o más pasajeros, taxi), el <strong>cilindraje</strong> y la <strong>antigüedad</strong> (0 a 9 años o 10 años o más). Valores 2026, revisados el <strong>{{FECHA_REVISION}}</strong>.</p>

<h2>Tarifas máximas 2026 para carros</h2>
{{TABLA_CARROS}}
<p>Para ver también carga, vehículos oficiales y servicio público, consulta la tabla completa en [[tarifas-soat-2026|Tarifas SOAT 2026]].</p>

<h2>Cómo encontrar tu categoría en tres pasos</h2>
<ol>
  <li><strong>Clase:</strong> revisa en la tarjeta de propiedad si tu vehículo figura como automóvil, camioneta, campero, taxi, etc.</li>
  <li><strong>Cilindraje:</strong> localiza el campo en centímetros cúbicos y ubícalo en el rango (menos de 1.500, entre 1.500 y 2.500, más de 2.500).</li>
  <li><strong>Antigüedad:</strong> cuenta los años desde el modelo del vehículo.</li>
</ol>
<p>También puedes ver los datos de tu vehículo en el RUNT ([[como-consultar-el-soat-por-placa|guía de consulta por placa]]).</p>

<h2>Un ejemplo de lectura de la tabla</h2>
<p>Un auto familiar de menos de 1.500 c.c. y de 0 a 9 años (código 511) tiene una tarifa máxima de $447.300. El mismo auto con 10 años o más (código 512) tiene una tarifa máxima de $592.900. La diferencia es un ejemplo del peso de la antigüedad en la tarifa.</p>

<h2>Recomendaciones antes de comprar</h2>
<ul>
  <li>Compra solo con aseguradoras autorizadas por la Superintendencia Financiera.</li>
  <li>Pide que te indiquen la <strong>categoría</strong> aplicada y verifícala.</li>
  <li>Comprueba el registro del SOAT en el RUNT después de la compra ([[como-verificar-si-el-soat-esta-vigente|cómo verificar la vigencia]]).</li>
</ul>
<div class="callout warn">
  <p>Ruta Clara no vende SOAT ni cotiza. Esta tabla es un tope de referencia, no una oferta de precio.</p>
</div>
HTML,
];
