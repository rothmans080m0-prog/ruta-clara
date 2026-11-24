<?php
return [
    'slug' => 'como-verificar-si-el-soat-esta-vigente',
    'category' => 'guias',
    'order' => 3,
    'featured' => false,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'Cómo verificar si el SOAT está vigente y qué hacer si no aparece',
    'description' => 'Aprende a comprobar la vigencia del SOAT en el RUNT, cómo leer las fechas de inicio y fin y qué hacer ante una póliza que no aparece o parece falsa.',
    'summary' => 'Cómo comprobar que un SOAT está vigente, cómo leer las fechas y qué hacer si la póliza no aparece registrada o parece falsa.',
    'verification' => 'La vigencia anual y el registro de la póliza en el RUNT están contrastados con fuentes oficiales y de Fasecolda. El flujo de consulta puede cambiar; confirma siempre en el sitio oficial.',
    'sources' => [
        ['RUNT: sitio oficial', 'https://www.runt.com.co'],
        ['Superintendencia Financiera de Colombia', 'https://www.superfinanciera.gov.co'],
        ['Fasecolda', 'https://www.fasecolda.com'],
        ['Ministerio de Transporte', 'https://www.mintransporte.gov.co'],
    ],
    'related' => ['como-consultar-el-soat-por-placa', 'multas-por-conducir-sin-soat', 'que-es-el-soat-en-colombia'],
    'faq' => [
        ['¿Cuánto dura la vigencia del SOAT?', 'La póliza se expide por un año. Debes revisar la fecha de inicio y la de fin que aparecen en el registro oficial.'],
        ['Compré el SOAT hoy y no aparece, ¿qué hago?', 'Espera un tiempo prudente y vuelve a consultar. Si sigue sin aparecer, contacta a la aseguradora que lo expidió para que confirme el reporte al RUNT y conserva tu comprobante.'],
        ['¿Cómo sé si un SOAT es falso?', 'Si no aparece registrado en la plataforma oficial con tu placa, no lo des por válido. Reporta el caso a la aseguradora y a la autoridad competente.'],
    ],
    'body' => <<<'HTML'
<p>Verificar que el SOAT está vigente te evita multas, la inmovilización del vehículo y, sobre todo, quedarte sin cobertura en un accidente. Esta guía explica cómo comprobar la vigencia y cómo interpretar lo que ves.</p>

<h2>Dónde verificar la vigencia</h2>
<p>La fuente de referencia es el <strong>RUNT</strong>, donde las aseguradoras reportan las pólizas expedidas. En [[como-consultar-el-soat-por-placa|cómo consultar el SOAT por placa]] encuentras el procedimiento paso a paso. Este portal no hace la consulta por ti.</p>

<h2>Cómo leer las fechas</h2>
<ul>
  <li><strong>Fecha de inicio:</strong> desde cuándo cubre la póliza. Si compraste un SOAT nuevo, revisa que no tenga una fecha de inicio posterior a hoy.</li>
  <li><strong>Fecha de fin:</strong> hasta cuándo cubre. La vigencia es de un año.</li>
  <li><strong>Estado:</strong> la póliza debe figurar como vigente para el día en que consultas.</li>
</ul>
<div class="callout">
  <p><strong>Consejo práctico:</strong> anota la fecha de fin en tu calendario con un recordatorio unas semanas antes, para renovar a tiempo y evitar periodos sin cobertura.</p>
</div>

<h2>Qué hacer si la póliza no aparece</h2>
<ol>
  <li>Comprueba que escribiste bien la placa.</li>
  <li>Espera un tiempo razonable si la compraste hace pocas horas y vuelve a consultar.</li>
  <li>Contacta a la <strong>aseguradora</strong> que expidió el SOAT y pídele confirmación del reporte al RUNT.</li>
  <li>Guarda tu comprobante de pago y la póliza.</li>
  <li>Si sospechas que fue una estafa, repórtalo a la aseguradora y a las autoridades. La Superintendencia Financiera publica información para consumidores financieros.</li>
</ol>

<h2>Por qué importa tenerlo vigente</h2>
<p>Circular con el SOAT vencido es una infracción con multa e inmovilización (más en [[multas-por-conducir-sin-soat|multas por conducir sin SOAT]]), y un accidente sin póliza vigente complica la atención y los trámites de las víctimas.</p>
HTML,
];
