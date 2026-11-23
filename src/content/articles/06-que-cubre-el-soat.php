<?php
return [
    'slug' => 'que-cubre-el-soat',
    'category' => 'informacion-general',
    'order' => 6,
    'featured' => true,
    'published' => '2026-11-23',
    'updated' => '2026-11-23',
    'title' => 'Qué cubre el SOAT: coberturas y montos máximos por víctima',
    'description' => 'Coberturas del SOAT en Colombia: gastos médicos, incapacidad permanente, muerte y gastos funerarios, y transporte. Topes expresados en salarios mínimos diarios.',
    'summary' => 'Las cuatro coberturas del SOAT, sus topes por víctima y cómo se interpretan, con fuentes y advertencias sobre posibles cambios normativos.',
    'verification' => 'Topes de 800, 180, 750 y 10 SMDLV contrastados con aseguradoras y la prensa económica de 2026. Algunas publicaciones de 2026 expresan el tope de gastos médicos en UVT, y el Ministerio de Salud publicó un proyecto de decreto para modificar cuantías (Decreto 780 de 2016). Confirma el valor vigente en la Superintendencia Financiera o el Ministerio de Salud.',
    'sources' => [
        ['Decreto 780 de 2016 (Ministerio de Salud y Protección Social)', 'https://www.minsalud.gov.co'],
        ['Superintendencia Financiera de Colombia', 'https://www.superfinanciera.gov.co'],
        ['Fasecolda: Cartilla SOAT', 'https://fasecolda.com/cms/wp-content/uploads/2021/11/Cartilla-SOAT-Fundamentos-Tecnicos-y-Juridicos-del-Seguro.pdf'],
    ],
    'related' => ['que-no-cubre-el-soat', 'tarifas-soat-2026', 'preguntas-frecuentes-sobre-el-soat'],
    'faq' => [
        ['¿Los topes aplican por accidente o por persona?', 'Según la información de las aseguradoras, los límites aplican a cada una de las víctimas de un mismo evento.'],
        ['¿Cubre al conductor?', 'Sí. El SOAT protege a las personas lesionadas en el accidente, incluido el conductor del vehículo, sin importar la responsabilidad.'],
        ['¿Qué pasa si los gastos superan el tope?', 'El SOAT cubre hasta el límite establecido. Lo que lo exceda puede atenderse con otros seguros o con el sistema de salud, según el caso.'],
    ],
    'body' => <<<'HTML'
<p>El SOAT cubre a las <strong>personas</strong> afectadas por un accidente de tránsito. Las coberturas y sus límites están establecidos en el Decreto 780 de 2016 y se expresan en <strong>salarios mínimos diarios legales vigentes (SMDLV)</strong> al momento del accidente.</p>

<h2>Las coberturas principales</h2>
<div class="table-wrap">
<table class="tbl">
  <caption>Coberturas del SOAT y topes máximos por víctima</caption>
  <thead><tr><th scope="col">Cobertura</th><th scope="col">Qué incluye</th><th scope="col" class="num">Tope</th></tr></thead>
  <tbody>
    <tr><td>Gastos médicos, quirúrgicos, farmacéuticos y hospitalarios</td><td>Urgencias, hospitalización, cirugías, medicamentos, rehabilitación, prótesis y material médico-quirúrgico</td><td class="num">Hasta 800 SMDLV</td></tr>
    <tr><td>Incapacidad permanente</td><td>Indemnización según la calificación de pérdida de capacidad</td><td class="num">Hasta 180 SMDLV</td></tr>
    <tr><td>Muerte y gastos funerarios</td><td>Indemnización a los beneficiarios y costos de exequias</td><td class="num">750 SMDLV</td></tr>
    <tr><td>Transporte de la víctima</td><td>Traslado inicial al establecimiento de salud</td><td class="num">Hasta 10 SMDLV</td></tr>
  </tbody>
</table>
</div>

<h2>Cómo se interpretan los topes</h2>
<ul>
  <li>Los montos se <strong>convierten a pesos</strong> con el salario mínimo vigente en la fecha del accidente.</li>
  <li>Los límites se aplican a <strong>cada víctima</strong>, no al vehículo.</li>
  <li>El acceso a las coberturas <strong>no depende de quién tuvo la culpa</strong>.</li>
  <li>Para la indemnización por incapacidad permanente se requiere el dictamen de calificación de la invalidez emitido por las entidades competentes.</li>
  <li>La muerte debe ocurrir como consecuencia del accidente y dentro del plazo que fija la norma.</li>
</ul>

<h2>Cobertura de gastos médicos en detalle</h2>
<p>Incluye la atención de urgencias, la hospitalización, los procedimientos quirúrgicos, los medicamentos, los servicios de diagnóstico, la rehabilitación y el suministro de prótesis, órtesis y material médico-quirúrgico. La institución de salud presta el servicio y lo cobra a la aseguradora del vehículo involucrado.</p>

<div class="callout warn">
  <p><strong>Nota sobre posibles cambios.</strong> Las cuantías se revisan periódicamente y en 2026 el Ministerio de Salud publicó un proyecto de decreto relacionado con ellas. Antes de tomar decisiones, confirma los valores vigentes en las fuentes oficiales.</p>
</div>

<h2>Lo que el SOAT no cubre</h2>
<p>El seguro no repara el vehículo ni los bienes de terceros. Revisa los límites y alternativas en [[que-no-cubre-el-soat|qué no cubre el SOAT]], y consulta cuánto cuesta en [[tarifas-soat-2026|Tarifas SOAT 2026]].</p>
HTML,
];
