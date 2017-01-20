
<br><h1 align="center" >Test categorias</h1>
<div class="row"><!--Lista -->
<?php
  $categorias = array();
  $r2 =[];
	foreach ($productosL as $f){
    $r[] = $f['grupo'];
    $r2 = array_unique($r);
  }
echo '<pre>'; print_r($r2); echo '</pre>';
?>
<br><h1 align="center" >Test 2 categorias</h1>

<?php $categorias = array(
  'Oficina' =>array(
    'ADHESIVOS' => array('CINTA ADHESIVA',
                        'CINTA ADHESIVA DE PAPEL',
                        'CINTA EMBALAJE',
                        'CINTA TRANSFERIBLE',
                        'COLA FRÍA ESCOLAR',
                        'DE CONTACTO',
                        'DE MASA',
                        'EN SPRAY',
                        ),
    'ARCHIVADORES'=> array('CARTA ANCHO',
                            'OFICIO ANCHO',
                            'OFICIO ANCHO',
                            'OFICIO ANGOSTO'
                          ),
    'CARPETAS'=> array('APRETADOR',
                        'CARTULINA PIGMENTADA',
                        'CON ANILLOS',
                        'CON ELÁSTICO',
                        'CON FUELLE',
                        'CON HILO',
                        'CUERO',
                        'FASTENER',
                        'FASTENER',
                        'LISTA PRECIO',
                        'PLÁSTICAS',
                        ),
    'ENCUADERNACIÓN'=> array('ESPIRALES',
                              'MICAS'
                            ),
    'EQUIPOS DE OFICINA'=> array('MÁQUINA ESPIRALERA',
                                  'MÁQUINA ETIQUETADORA',
                                  'MÁQUINA PLASTIFICADORA',
                                  'TRITURADORAS'
                                  ),
    'LAPICERÍA'=> array('GEL',
                        'GEL METÁLICOS',
                        'LÁPIZ PARA TRANSPARENCIA',
                        'MARCADORES',
                        'MARCADORES',
                        'PASTA',
                        'PLUMONES PERMANENTES',
                        'PLUMONES PERMANENTES',
                        'PLUMONES PIZARRA',
                        'PLUMON PINTURA ÓLEO',
                        'PORTAMINAS',
                        'RAPIDOGRAPH',
                        'RECARGA PLUMONES',
                        'REPUESTO MINAS',
                        'REPUESTO MINAS',
                        'REPUESTOS',
                        'TINTA'
                        ),
    'LIBROS CONTABLES'=> array('LIBROS CONTABLES',
                                'LIBROS DE ACTAS',
                                'LIBROS DE ASISTENCIA',
                                'LIBROS DE REGISTRO',
                                'MANIFOLD'
                                ),
    'OFICINA'=> array('Adhesivos de Oficina',
                      'Archivo y Registro',
                      'Blocks Milimetrado, Roneo, Fiscal, Garzón y Otros',
                      'Calculadoras',
                      'Cintas Adhesivas',
                      'Dispensadores Cinta',
                      'Equipos de Oficina',
                      'Escritura',
                      'Etiquetas Autoadhesivas y Rollos Cinta',
                      'Fijar, Perforar y Cortar',
                      'Libros y Formularios',
                      'Manualidades Escolares',
                      'Organizadores',
                      'Papeles',
                      'Papeles y encuadernación',
                      'Papel y Cartulina para Impresión de colores',
                      'Pilas y Baterías',
                      'Utensilios Varios de Oficina',
                  ),
    'SUMINISTROS OFICINA'=> array(),
    'SEGURIDAD INDUSTRIAL'=> array(),
    'PAPEL IMPRESIÓN Y FOTOCOPIA'=> array()
  )


);
echo '<pre>'; print_r($categorias); echo '</pre>';
?>
