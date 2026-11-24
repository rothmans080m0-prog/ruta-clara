<?php
return [
    'slug' => 'como-consultar-informacion-en-adres',
    'category' => 'consultas',
    'order' => 5,
    'featured' => false,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'Cómo consultar información relacionada con el SOAT en ADRES',
    'description' => 'Qué es la ADRES, qué papel cumple frente al SOAT y los accidentes de tránsito, y qué consultas puedes hacer en su sitio oficial. Guía informativa.',
    'summary' => 'Qué es la ADRES, qué relación tiene con el SOAT y qué tipo de información puedes consultar en su plataforma oficial.',
    'verification' => 'La contribución del 52 % de la prima a favor de la ADRES está contrastada con la tabla de tarifas publicada por Fasecolda. El detalle de servicios y menús de la ADRES debe confirmarse en su sitio oficial; este portal no está afiliado a la entidad.',
    'sources' => [
        ['ADRES: sitio oficial', 'https://www.adres.gov.co'],
        ['Fasecolda: tarifas SOAT 2026', 'https://www.fasecolda.com/wp-content/uploads/Tarifas-SOAT-2026-referencia.pdf'],
        ['Ministerio de Salud y Protección Social', 'https://www.minsalud.gov.co'],
    ],
    'related' => ['como-consultar-el-soat-en-el-runt', 'tarifas-soat-2026', 'que-cubre-el-soat'],
    'faq' => [
        ['¿Puedo saber en ADRES si mi SOAT está vigente?', 'No es el lugar para eso. La vigencia de la póliza se verifica en el RUNT. La ADRES administra recursos del sistema de salud.'],
        ['¿Por qué aparece la ADRES en el precio del SOAT?', 'Porque una parte del valor que pagas corresponde a una contribución a favor de la ADRES, que en las tarifas 2026 equivale al 52 % de la prima.'],
        ['¿Guía de Pagos SOAT Colombia tiene relación con la ADRES?', 'No. Es un portal independiente y no representa a ninguna entidad oficial.'],
    ],
    'body' => <<<'HTML'
<p>La <strong>ADRES</strong> (Administradora de los Recursos del Sistema General de Seguridad Social en Salud) es la entidad que administra los recursos del sistema de salud colombiano. Aparece en el mundo del SOAT por dos razones: recibe parte de lo que pagas por la póliza y administra recursos para atender a víctimas de accidentes de tránsito en ciertos casos.</p>

<h2>Qué relación tiene la ADRES con el SOAT</h2>
<ul>
  <li><strong>Contribución en el precio.</strong> En las tarifas máximas 2026, el valor total del SOAT incluye una contribución a la ADRES equivalente al 52 % de la prima, además de la tasa del RUNT. Lo detallamos en [[tarifas-soat-2026|Tarifas SOAT 2026]].</li>
  <li><strong>Atención de víctimas sin póliza.</strong> Cuando un accidente involucra un vehículo sin SOAT o no identificado, el sistema tiene mecanismos con cargo a recursos públicos para atender a las víctimas. Las condiciones y trámites los define la normativa y deben consultarse en la entidad.</li>
</ul>

<h2>Qué se puede consultar en el sitio oficial</h2>
<p>La ADRES ofrece en su sitio herramientas para ciudadanos, como la consulta de la <strong>afiliación al sistema de salud</strong> y orientación sobre sus servicios. Los menús cambian con el tiempo, por lo que te recomendamos entrar a <strong>adres.gov.co</strong> y usar la sección de servicios al ciudadano.</p>
<div class="callout warn">
  <p><strong>No confundas las consultas.</strong> Para saber si un SOAT está vigente usa el RUNT (ver [[como-consultar-el-soat-en-el-runt|cómo consultar el SOAT en el RUNT]]). La ADRES no es la fuente para verificar pólizas.</p>
</div>

<h2>Cuándo te sirve consultar a la ADRES</h2>
<ul>
  <li>Si necesitas confirmar tu <strong>afiliación al sistema de salud</strong>.</li>
  <li>Si fuiste víctima de un accidente y requieres información sobre la atención cuando el vehículo no tenía SOAT o no fue identificado.</li>
  <li>Si quieres entender cómo se financian los servicios asociados al SOAT.</li>
</ul>

<h2>Recomendaciones</h2>
<ol>
  <li>Entra siempre escribiendo la dirección oficial en tu navegador.</li>
  <li>No compartas datos personales o bancarios con páginas que dicen "gestionar" trámites de la ADRES.</li>
  <li>Guarda los soportes médicos y del accidente: te serán útiles para cualquier reclamación.</li>
</ol>
<p>Para conocer los montos y servicios que cubre la póliza, revisa [[que-cubre-el-soat|qué cubre el SOAT]].</p>
HTML,
];
