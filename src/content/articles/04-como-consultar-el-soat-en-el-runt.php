<?php
return [
    'slug' => 'como-consultar-el-soat-en-el-runt',
    'category' => 'consultas',
    'order' => 4,
    'featured' => false,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'Cómo consultar el SOAT en el RUNT: qué es y qué datos muestra',
    'description' => 'Qué es el RUNT, qué información sobre el SOAT contiene y cómo interpretar el resultado de una consulta ciudadana. Guía con enlaces a la fuente oficial.',
    'summary' => 'Qué es el RUNT, qué datos de la póliza SOAT puedes encontrar allí y cómo interpretar los resultados de una consulta.',
    'verification' => 'Descripción general del RUNT. Los campos y menús exactos pueden variar; revisa siempre el sitio oficial. Este portal no está afiliado al RUNT.',
    'sources' => [
        ['RUNT: sitio oficial', 'https://www.runt.com.co'],
        ['Ministerio de Transporte', 'https://www.mintransporte.gov.co'],
        ['Superintendencia Financiera de Colombia', 'https://www.superfinanciera.gov.co'],
    ],
    'related' => ['como-consultar-el-soat-por-placa', 'como-verificar-si-el-soat-esta-vigente', 'como-consultar-informacion-en-adres'],
    'faq' => [
        ['¿Guía SOAT Colombia está afiliado al RUNT?', 'No. Guía SOAT Colombia es un portal independiente, sin vínculo con el RUNT ni con ninguna entidad oficial.'],
        ['¿Quién reporta el SOAT al RUNT?', 'Las aseguradoras que expiden la póliza son las encargadas de reportarla al registro. Si no aparece, la aseguradora es el primer contacto.'],
        ['¿El RUNT sirve para algo más que el SOAT?', 'Sí. Es el registro nacional de tránsito: contiene información de vehículos, conductores y otros documentos relacionados.'],
    ],
    'body' => <<<'HTML'
<p>El <strong>RUNT</strong> (Registro Único Nacional de Tránsito) es el sistema de información oficial en el que se centraliza la información de vehículos, conductores y otros registros relacionados con el tránsito en Colombia. Para el SOAT, es el lugar donde se verifica que una póliza fue expedida y reportada.</p>

<h2>Qué es el RUNT y por qué importa para el SOAT</h2>
<p>Cuando una aseguradora expide un SOAT, debe registrarlo. Ese registro permite que las autoridades y los propietarios puedan comprobar la vigencia de forma oficial, sin depender de documentos impresos que podrían ser falsificados.</p>

<h2>Qué datos puedes encontrar</h2>
<ul>
  <li>Datos básicos del vehículo asociados a la placa.</li>
  <li>Pólizas SOAT registradas, con su <strong>fecha de inicio, fecha de fin y estado</strong>.</li>
  <li>La <strong>aseguradora</strong> que expidió la póliza.</li>
</ul>
<p>La cantidad de datos visibles puede depender del tipo de consulta y de los datos de verificación que ingreses.</p>

<h2>Cómo hacer la consulta</h2>
<ol>
  <li>Ingresa a <strong>runt.com.co</strong> escribiendo la dirección en el navegador.</li>
  <li>Elige la consulta ciudadana de vehículos.</li>
  <li>Ingresa los datos solicitados y revisa la sección de SOAT.</li>
</ol>
<p>El procedimiento detallado, con precauciones, está en [[como-consultar-el-soat-por-placa|cómo consultar el SOAT por placa]].</p>

<h2>Cómo interpretar el resultado</h2>
<ul>
  <li>Si hay una póliza <strong>vigente</strong> para la fecha de hoy, el vehículo cumple la obligación.</li>
  <li>Si la póliza aparece <strong>vencida</strong>, debes renovar con una aseguradora autorizada antes de circular.</li>
  <li>Si <strong>no hay pólizas</strong>, revisa la placa y contacta a la aseguradora si acabas de comprar el seguro.</li>
</ul>

<h2>Privacidad y buenas prácticas</h2>
<p>Los datos del RUNT incluyen información personal. Consulta solo lo necesario, no compartas capturas con datos sensibles y desconfía de sitios que te pidan información bancaria para "desbloquear" una consulta.</p>
<p>Para entender la relación con el sistema de salud, lee [[como-consultar-informacion-en-adres|cómo consultar información relacionada en ADRES]].</p>
HTML,
];
