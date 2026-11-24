<?php
return [
    'slug' => 'como-consultar-el-soat-por-placa',
    'category' => 'consultas',
    'order' => 2,
    'featured' => false,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'Cómo consultar el SOAT por placa: pasos en el RUNT',
    'description' => 'Aprende cómo consultar el SOAT de un vehículo por placa en la plataforma oficial del RUNT, qué datos verás y qué precauciones tomar con sitios no oficiales.',
    'summary' => 'Paso a paso para consultar un SOAT por placa en la plataforma oficial, qué información verás y cómo evitar sitios engañosos.',
    'verification' => 'Los pasos describen el flujo general de la consulta ciudadana del RUNT. Los menús y requisitos pueden cambiar: este portal no accede a ninguna base de datos oficial y no realiza consultas por ti.',
    'sources' => [
        ['RUNT: sitio oficial', 'https://www.runt.com.co'],
        ['Superintendencia Financiera de Colombia', 'https://www.superfinanciera.gov.co'],
        ['Ministerio de Transporte', 'https://www.mintransporte.gov.co'],
    ],
    'related' => ['como-verificar-si-el-soat-esta-vigente', 'como-consultar-el-soat-en-el-runt', 'que-es-el-soat-en-colombia'],
    'faq' => [
        ['¿Este sitio puede consultar mi placa?', 'No. Guía de Pagos SOAT Colombia no tiene acceso a bases de datos oficiales ni ofrece un servicio de consulta. Te explicamos cómo hacerlo en el sitio oficial del RUNT.'],
        ['¿Tengo que pagar para consultar el SOAT?', 'La consulta ciudadana en la plataforma oficial no debería tener costo. Desconfía de páginas que te cobren por mostrarte información de una placa.'],
        ['¿Puedo consultar el SOAT de un vehículo que no es mío?', 'Depende de los datos que pida la plataforma oficial. El RUNT puede exigir información de verificación del propietario para mostrar ciertos datos del vehículo.'],
    ],
    'body' => <<<'HTML'
<p>Consultar el SOAT por placa significa revisar, en el registro oficial, si un vehículo tiene una póliza registrada y cuáles son sus fechas de vigencia. La fuente oficial para hacerlo es el <strong>RUNT</strong> (Registro Único Nacional de Tránsito). A continuación te explicamos el procedimiento general.</p>

<div class="callout warn">
  <p><strong>Aclaración:</strong> Guía de Pagos SOAT Colombia <strong>no realiza consultas</strong> ni muestra datos de vehículos. Solo te orienta para que uses las plataformas oficiales.</p>
</div>

<h2>Qué necesitas antes de empezar</h2>
<ul>
  <li>La <strong>placa</strong> del vehículo, tal como aparece en la tarjeta de propiedad o en el vehículo.</li>
  <li>Según lo que solicite la plataforma, es posible que debas ingresar un dato de verificación, como el <strong>número de documento del propietario</strong>.</li>
  <li>Un navegador actualizado y conexión a internet.</li>
</ul>

<h2>Pasos para consultar por placa en el RUNT</h2>
<ol>
  <li>Escribe directamente en tu navegador la dirección oficial <strong>runt.com.co</strong>. Evita llegar desde anuncios o enlaces de terceros.</li>
  <li>Busca la opción de <strong>consulta ciudadana</strong> o consulta de vehículos.</li>
  <li>Selecciona la consulta <strong>por placa</strong> e ingresa los datos que te pida el formulario.</li>
  <li>Completa la verificación de seguridad que solicite la página.</li>
  <li>En el resultado, busca la sección de <strong>pólizas SOAT</strong> del vehículo.</li>
</ol>
<p>Los nombres exactos de los menús pueden cambiar con el tiempo. Si no encuentras una opción, usa el buscador interno del sitio oficial.</p>

<h2>Qué información debes revisar</h2>
<ul>
  <li><strong>Fecha de inicio y fecha de fin</strong> de la vigencia.</li>
  <li><strong>Estado</strong> de la póliza (vigente, vencida, cancelada).</li>
  <li><strong>Aseguradora</strong> que la expidió.</li>
  <li>Que la <strong>placa</strong> corresponda al vehículo que estás revisando.</li>
</ul>
<p>Para interpretar las fechas con detalle lee [[como-verificar-si-el-soat-esta-vigente|cómo verificar si el SOAT está vigente]].</p>

<h2>Precauciones frente a sitios no oficiales</h2>
<ul>
  <li>No ingreses datos bancarios ni pagues en páginas que prometen "consultas" de SOAT.</li>
  <li>Verifica que la dirección sea la de la entidad oficial y que la conexión sea segura (https).</li>
  <li>Si compraste un SOAT y no aparece registrado, comunícate con la aseguradora que lo expidió y con la Superintendencia Financiera.</li>
</ul>
<p>Si quieres entender mejor qué es el registro y qué datos contiene, revisa [[como-consultar-el-soat-en-el-runt|cómo consultar el SOAT en el RUNT]].</p>
HTML,
];
