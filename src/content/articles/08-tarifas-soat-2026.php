<?php
return [
    'slug' => 'tarifas-soat-2026',
    'category' => 'tarifas',
    'order' => 8,
    'featured' => true,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'Tarifas SOAT 2026: tabla oficial de tarifas máximas por categoría',
    'description' => 'Tarifas máximas del SOAT 2026 en Colombia por categoría de vehículo: motos, autos familiares, camionetas, taxis y más. Fuente: Superintendencia Financiera.',
    'summary' => 'Tabla completa de las tarifas máximas del SOAT 2026, cómo se componen, cómo se calculan y cuándo se actualizan.',
    'verification' => 'Valores transcritos de la tabla de tarifas máximas comerciales 2026 que publica Fasecolda con base en la Circular Externa 022 de 2025 de la Superintendencia Financiera. Revisados el 23 de noviembre de 2026. Son tarifas máximas: confirma el valor final con la aseguradora autorizada.',
    'sources' => [
        ['Fasecolda: Tarifas máximas comerciales del SOAT 2026 (PDF)', 'https://www.fasecolda.com/wp-content/uploads/Tarifas-SOAT-2026-referencia.pdf'],
        ['Superintendencia Financiera de Colombia: Circular Externa 022 de 2025', 'https://www.superfinanciera.gov.co'],
        ['Ministerio de Transporte: tasa RUNT', 'https://www.mintransporte.gov.co'],
        ['ADRES: contribución del SOAT', 'https://www.adres.gov.co'],
    ],
    'related' => ['soat-para-motos', 'soat-para-carros', 'que-cubre-el-soat'],
    'faq' => [
        ['¿Las tarifas son precios fijos?', 'Son tarifas máximas: ninguna aseguradora puede cobrar más que el tope de la categoría. Este portal no ofrece cotizaciones ni descuentos.'],
        ['¿Qué incluye el valor total?', 'La prima del seguro, la contribución a la ADRES (52 % de la prima) y la tasa del RUNT, que en la tabla 2026 es de $2.400.'],
        ['¿Cuándo cambian las tarifas?', 'La Superintendencia Financiera las actualiza cada año; las de 2026 rigen desde el 1 de enero de ese año.'],
        ['¿Cómo sé en qué categoría está mi vehículo?', 'Revisa la tarjeta de propiedad (clase, cilindraje, modelo) o consulta la información del vehículo en el RUNT.'],
    ],
    'body' => <<<'HTML'
<p>Las tarifas del SOAT no las fija cada aseguradora a su gusto: la <strong>Superintendencia Financiera de Colombia</strong> establece cada año <strong>tarifas máximas</strong> por categoría de vehículo. Las de 2026 están en la Circular Externa 022 de 2025 y rigen desde el 1 de enero de 2026. Esta página reúne los valores con su fuente y fecha de revisión (<strong>{{FECHA_REVISION}}</strong>).</p>

<div class="callout warn">
  <p><strong>Importante:</strong> esta tabla es informativa. Guía SOAT Colombia no vende SOAT, no cotiza y no promete descuentos. El valor final lo confirma la aseguradora autorizada.</p>
</div>

<h2>Tarifas máximas 2026 por categoría</h2>
<p>Los valores son el <strong>total a pagar</strong> por el usuario, en pesos colombianos, e incluyen la prima, la contribución a la ADRES y la tasa del RUNT.</p>
{{TABLA_TARIFAS}}

<h2>De qué se compone el valor</h2>
<ul>
  <li><strong>Prima del seguro:</strong> lo que corresponde a la cobertura.</li>
  <li><strong>Contribución a la ADRES:</strong> el 52 % de la prima (ver [[como-consultar-informacion-en-adres|información sobre ADRES]]).</li>
  <li><strong>Tasa RUNT:</strong> $2.400 por póliza en la tabla 2026.</li>
</ul>

<h2>Cómo se calculan las tarifas</h2>
<p>La tarifa depende de la <strong>clase de vehículo</strong>, su <strong>cilindraje o capacidad</strong> y, en varios casos, su <strong>antigüedad</strong> (0 a 9 años o 10 años o más). Para las categorías con rango diferencial por riesgo, la norma prevé un ajuste anual ligado a la variación de la UVT. Según la información publicada al inicio de 2026, ese ajuste fue de 5,17 % para esas categorías, mientras que para el resto del parque automotor el incremento estimado fue de 0,38 %.</p>

<h2>Categorías de vehículos</h2>
<ul>
  <li><strong>Motos</strong> (códigos 100 a 150): por cilindraje. Más en [[soat-para-motos|SOAT para motos]].</li>
  <li><strong>Autos familiares, camperos y camionetas, vehículos de seis o más pasajeros:</strong> por cilindraje y antigüedad. Más en [[soat-para-carros|SOAT para carros]].</li>
  <li><strong>Autos de negocios y taxis</strong>, <strong>carga o mixtos</strong>, <strong>oficiales especiales</strong> y <strong>servicio público</strong>.</li>
</ul>

<h2>Actualizaciones de precios</h2>
<p>Las tarifas se revisan cada año. Cuando la Superintendencia publique las de 2027, actualizaremos esta página y la fecha de revisión. Si ves una diferencia entre esta tabla y lo que te cobran, pide a la aseguradora la categoría aplicada y compárala con la tarjeta de propiedad de tu vehículo.</p>
<p>Para entender qué recibes a cambio, lee [[que-cubre-el-soat|qué cubre el SOAT]].</p>
HTML,
];
