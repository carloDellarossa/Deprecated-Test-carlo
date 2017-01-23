
<br><h1 align="center" >Test categorias</h1>
<div class="row"><!--Lista -->
<?php
  $categorias = array();
  $r2 =[];
	foreach ($productosL as $f){
    $r[] = $f['grupo'];
    $r2 = array_unique($r);
    //echo '<pre>'; print_r($f); echo '</pre>';
  }

?>
<?php
function array_keys_recursive($myArray, $MAXDEPTH = INF, $depth = 0, $arrayKeys = array()){
       if($depth < $MAXDEPTH){
            $depth++;
            $keys = array_keys($myArray);
            foreach($keys as $key){
                if(is_array($myArray[$key])){
                    $arrayKeys[$key] = array_keys_recursive($myArray[$key], $MAXDEPTH, $depth);
                }
            }
        }

        return $arrayKeys;
    }
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
                      'Utensilios Varios de Oficina'
                  ),
    'SUMINISTROS OFICINA'=> array('ABRIDORES',
                                  'ALFILERES Y CHINCHES',
                                  'APRETADORES',
                                  'BASE PARA CORTAR',
                                  'CAJAS MULTIORDEN',
                                  'CALCOS',
                                  'CARTONERO',
                                  'CORCHETERAS',
                                  'DISPENSADORES',
                                  'ENGRAPADORA',
                                  'ESPONJERO',
                                  'ETIQUETAS',
                                  'FASTENER',
                                  'GRAPAS',
                                  'LIBRETAS Y BLOCKS',
                                  'NOTES',
                                  'ORGANIZADORES',
                                  'PERFORADORAS',
                                  'PERFORADORAS',
                                  'PORTA CREDENCIAL',
                                  'SEPARADORES',
                                  'SOBRES',
                                  'TACOS',
                                  'TAMPONES',
                                  'TERMOLAMINADO',
                                  'TIJERAS',
                                  'TIMBRES',
                                  'TINTAS DE RECARGA'
                                  ),
    'SEGURIDAD INDUSTRIAL'=> array('GUANTES'
                                  ),
    'PAPEL IMPRESIÓN Y FOTOCOPIA'=> array('PAPEL COLOR CARTA',
                                          'PAPEL COLOR OFICIO',
                                          'PAPEL COLOR OFICIO',
                                          'PAPEL CONTÍNUO CUADRUPLICADO',
                                          'PAPEL OFICIO',
                                          'PAPEL RONEO'
                                          )
  ),//final array oficina
  'Escolar'=>array('CIENCIAS'=>array('INSTRUMENTOS DE LABORATORIO',
                                      'MICROSCOPIOS',
                                      'MODELOS ANATÓMICOS',
                                      'TELESCOPIOS'
                                      ),
                    'CUADERNOS'=>array('COLLEGE CUADRICULADO',
                                      'CUADERNO 1/2 CARTA',
                                      'CUADERNO 1/2 CARTA',
                                      'CUADERNO 1/4',
                                      'CUADERNO 1/4',
                                      'CUADERNO 1/8',
                                      'CUADERNO CALIGRAFIX',
                                      'CUADERNO CARTA',
                                      'CUADERNO CARTA',
                                      'CUADERNO DE APRESTO',
                                      'CUADERNO EMPASTADO',
                                      'CUADERNO EMPASTADO',
                                      'CUADERNO OFICIO',
                                      'CUADERNOS ESPECIALES',
                                      'CUADERNO UNIVERSITARIO TRIPLE',
                                      'DOBLEZ CROQUIS',
                                      'DOBLEZ CUADRICULADO',
                                      'DOBLEZ LINEAL',
                                      'UNIVERSITARIO CUADRICULADO'
                                      ),
                    'ESCOLAR'=>array('Adhesivos Escolares',
                                    'Aplicadores Silicona y Barras',
                                    'ARCHIVADORES',
                                    'Archivadores y Organizadores Escolar',
                                    'ASIDERO',
                                    'BLOCK DE DIBUJO',
                                    'Blocks Apunte',
                                    'Blocks Dibujo',
                                    'Carpetas (Bolsones) de Papeles',
                                    'CARPETAS DE PAPELES Y CARTONES',
                                    'Compases',
                                    'CORRECTORES',
                                    'Croqueras',
                                    'Cuadernos',
                                    'DESTACADORES',
                                    'DICCIONARIOS',
                                    'Equipamiento para Escuelas',
                                    'Equipos de Oficina',
                                    'Escarcha, Brillantina y Glitter Glue',
                                    'Escribir, Borrar y Pintar Escolar',
                                    'Estuches Escolares',
                                    'ETIQUETAS ESCOLARES',
                                    'FICHAS BIBLIOGRÁFICAS',
                                    'Fijar, Perforar, Cortar Escolar',
                                    'FORROS',
                                    'Forros para Libros, Cuadernos y Otros',
                                    'Goma EVA',
                                    'GOMAS DE BORRAR',
                                    'Instrumentos Musicales Escolares',
                                    'Juegos Didácticos Escolares',
                                    'LÁMINAS EDUCATIVAS',
                                    'LÁPICES ACUARELABLES',
                                    'LÁPICES DE CERA',
                                    'LÁPICES DE MADERA',
                                    'LÁPICES DE MINA',
                                    'LIBRETA COMUNICACIONES',
                                    'Libros, Atlas y Diccionarios',
                                    'LUPAS',
                                    'MANUALIDAD ESCOLAR',
                                    'Manualidades Escolares',
                                    'Mochilas',
                                    'Otros Lista Escolar',
                                    'Palos Helado',
                                    'Palos Maqueta',
                                    'PAPELES',
                                    'Papeles y encuadernación',
                                    'Plasticina',
                                    'PLASTICINAS',
                                    'Reglas, Escuadras, Cerchas y otros',
                                    'ROTULADORES',
                                    'SACAPUNTAS',
                                    'Set Practica',
                                    'SET PRÁCTICA ',
                                    'TÉMPERA',
                                    'TIJERAS',
                                    'Tiza',
                                    ''
                                    ),
                    'FERRETERÍA'=>array('ACCESORIOS',
                                        'SIERRAS'
                                        ),
                    'INSTRUMENTOS GEOMETRÍA'=>array('COMPASES',
                                                    'ESCALÍMETRO',
                                                    'ESCUADRAS',
                                                    'NORMÓGRAFOS Y CERCHAS',
                                                    'NORMÓGRAFOS Y CERCHAS',
                                                    'REGLAS METÁLICAS',
                                                    'REGLAS PLÁSTICAS',
                                                    'TRANSPORTADORES'
                                                    ),
                    'INSTRUMENTOS MUSICALES'=>array('MELÓDICO',
                                                    'PERCUSIÓN'
                                                    ),
                    'MANUALIDADES'=>array('AGUJAS',
                                          'ALGODÓN SINTÉTICO',
                                          'ARGOLLAS',
                                          'ARPILLERA',
                                          'ASERRÍN',
                                          'BASTIDORES MADERA',
                                          'BRILLANTINA',
                                          'BROCHETAS',
                                          'DECOUPAGE',
                                          'ESCARCHA',
                                          'ESTERILLA',
                                          'FIGURAS DE MADERA',
                                          'FIGURITAS PLUMAVIT',
                                          'HILOS',
                                          'IMÁN',
                                          'LAMINAS DE CORCHO',
                                          'LENTEJUELAS',
                                          'MUESTRARIOS DE MATERIALES',
                                          'PISTOLA SILICONA',
                                          'PUNZON',
                                          'SET BOTONES',
                                          'SET DE BILLETES',
                                          'SET DE FIGURITAS',
                                          'SET DE FIGURITAS GOMA EVA',
                                          'SISAL'
                                          ),
                    'MAQUETERÍA'=>array('FIGURITAS DE ESCENA',
                                        'LÁMINAS DE TEXTURAS',
                                        'MADERA DE BALSA',
                                        'PLANCHAS DE MADERA',
                                        'PLANCHAS DE PLUMAVIT',
                                        ),
                    'MOCHILAS Y MALETINES'=>array('ESTUCHES',
                                                  'MALETINES',
                                                  'PORTA PLANOS'
                                                  ),
                    'PAPELERIA'=>array('Cartón Corrugado',
                                      'Cartón Espuma',
                                      'Cartón Europa',
                                      'Cartón Forrado',
                                      'Cartón Madera',
                                      'Cartón Microcorrugado Colores',
                                      'Cartón Panal',
                                      'Cartón Piedra',
                                      'Cartulina',
                                      'Cartulina Fluorescente',
                                      'Cartulina Metalizada',
                                      'Cartulina y Papel Gofrado',
                                      'Paño Lenci'
                                      ),
                    'PIZARRAS'=>array('ACRÍLICAS',
                                      'CORCHO Y MADERA',
                                      'INFANTILES'
                                      ),
                    'PAPELES Y CARTONES'=>array('CARTÓN CORRUGADO',
                                                'CARTÓN FORRADO',
                                                'CARTÓN MADERA',
                                                'CARTÓN MICROCORRUGADO',
                                                'CARTÓN PIEDRA',
                                                'CARTULINA DOBLE FAZ',
                                                'CARTULINA DOBLE FAZ TARJETERÍA',
                                                'CARTULINA FLUORESCENTE',
                                                'CARTULINA GOFRADA',
                                                'CARTULINA METALIZADA',
                                                'CARTULINAS',
                                                'PAPEL CELOFÁN',
                                                'PAPEL COUNTRY',
                                                'PAPEL CREPE',
                                                'PAPEL DIAMANTE',
                                                'PAPEL LUSTRE',
                                                'PAPEL PERLADO',
                                                'PAPEL VINÍLICO',
                                                'PAPEL VOLANTÍN'
                                                )
                    ),//fin array escorlar
  'Hogar'=>array('ASEO-LIMPIEZA'=>array('Aseo Personal',
                                        'Blanqueador',
                                        'Bloqueador Solar',
                                        'Bolsa Basura',
                                        'Carro para Mopas',
                                        'Cera para Autos',
                                        'Cera para Pisos',
                                        'Cloro',
                                        'Desinfectante WC',
                                        'Desodorante Ambiental',
                                        'Detergente',
                                        'Dispensadores',
                                        'Dispensadores',
                                        'Escobas y Escobillones - Palas y Sets',
                                        'Escobillas',
                                        'Esponjas',
                                        'Guantes',
                                        'Insecticidas',
                                        'Insecticidas',
                                        'Lavalozas',
                                        'Limpiadores',
                                        'Lustramuebles',
                                        'Mopa',
                                        'Paño Limpieza',
                                        'Papeles Tissue Hogar',
                                        'Papeles Tissue Industrial',
                                        'Pinza Madera (Perro Ropa)',
                                        'Plumero',
                                        'Quita Manchas',
                                        'Silicona - Renovador Gomas y Sets',
                                        'Sopapo',
                                        'Suavizante',
                                        'Toalla Baño',
                                        'Virutilla',
                                        ''
                                        ),
                'CAFETERIA'=>array('Azucar',
                                  'Café',
                                  'Endulzante',
                                  'Te'
                                  ),
                'CAFETERÍA'=>array('CAFÉ',
                                  'ENDULZANTES',
                                  'MILO'
                                  ),
                'HOGAR'=>array('ACCESORIOS PARA EL HOGAR'
                              ),
                'LIMPIEZA E HIGIENE'=>array('ALGODÓN',
                                            'ASEO PERSONAL',
                                            'BETÚN ZAPATOS Y ESCOBILLAS',
                                            'BOLSAS',
                                            'CERAS Y VIRUTILLAS',
                                            'DESODORANTES AMBIENTALES E INSECTICIDAS',
                                            'DETERGENTES',
                                            'ESCOBILLONES',
                                            'ESPONJAS Y MAGO PAD',
                                            'JABONES',
                                            'LAVALOZA',
                                            'LIMPIADORES Y DESINFECTANTES',
                                            'PAÑOS DE LIMPIEZA',
                                            'PAPEL HIGIÉNICO Y TOALLAS DE PAPEL'
                                            ),
                'Sopapo'=>array(''),
                ),
  'Computacion y Electronica'=>array('CALCULADORAS'=>array('CIENTÍFICAS',
                                            'ESCRITORIO',
                                            'SOBREMESA'
                                            ),
                      'COMPUTACION'=>array('Adaptadores y HUBs USB',
                                          'Apoya Muñecas y Pies',
                                          'Audífonos',
                                          'Bases para Computadores',
                                          'Baterías Externa',
                                          'Cables',
                                          'Cámaras Web',
                                          'Candados y Fijadores para Computadores',
                                          'Cargadores',
                                          'Cartridges',
                                          'CD-DVD - BD (BLUE RAY)',
                                          'Cilindros',
                                          'Cinta Impresora - Máquina',
                                          'Cinta para Marcar',
                                          'Controles Remoto y de Consolas - Joysticks',
                                          'CUCHILLAS',
                                          'Discos Duros',
                                          'Kits Computación - Limpieza',
                                          'Memorias SD - Micro SD y Otras',
                                          'Micrófonos',
                                          'Mochilas y Fundas Notebook - Tablet - Otras',
                                          'Mouse',
                                          'Otros',
                                          'Parlantes',
                                          'Pendrives',
                                          'Porta CD-DVD - Diskettes',
                                          'Protector de Voltaje',
                                          'Recargas Cartridges y Tonner',
                                          'Reproductores MP3 y MP4 - Transmisores FM',
                                          'Reveladores',
                                          'Soporte TV - Monitores',
                                          'Teclados',
                                          'Tinta Impresoras',
                                          'Tonners'
                                          ),
                      'COMPUTACIÓN Y ELECTRÓNICA'=>array('ACCESORIOS COMPUTACIÓN',
                                                        'ACCESORIOS COMPUTACIÓN',
                                                        'AUDÍFONOS Y MICRÓFONOS',
                                                        'BOLSO Y FUNDA',
                                                        'CABLES',
                                                        'CARGADORES',
                                                        'CDS',
                                                        'CDS',
                                                        'DVDS',
                                                        'MOUSE',
                                                        'PARLANTES',
                                                        'PENDRIVE Y DISCO DURO',
                                                        'PILAS',
                                                        'TECLADOS',
                                                        ),
                      'TINTAS DE IMPRESIÓN'=>array('CINTA IMPRESIÓN',
                                                  'INKJET ALTERNATIVOS',
                                                  'INKJET ORIGINALES',
                                                  'LÁSER ALTERNATIVO',
                                                  'LÁSER ORIGINAL',
                                                  'TONER'
                                                  ),
                      ),
  'Jugeteria'=>array('JUGUETERÍA Y ENTRETENCIÓN'=>array('ACCESORIOS DEPORTE',
                                                        'BINOCULARES',
                                                        'CUENTOS',
                                                        'JUEGOS DE SALÓN',
                                                        'JUEGOS DIDÁCTICOS',
                                                        'JUGUETES DE NIÑO',
                                                        'JUGUETES UNISEX',
                                                        'TÍTERES'
                                                        ),
                      'OTROS'=>array('Barcelona',
                                    'Base Goma',
                                    'Bolsas Ecotela',
                                    'Bolsas Vacuum',
                                    'Casco',
                                    'Colgador',
                                    'Guantes Box',
                                    'Juguetes',
                                    'otros',
                                    'Pesas',
                                    'Piso Plástico',
                                    'Protector Dientes',
                                    'Real Madrid',
                                    'set herramientas',
                                    'set proteccion',
                                    'Termos'
                                    ),
                      ),
  'Tempodarada y regalos'=>array('COTILLON'=>array('Anteojos Diseños',
                                                  'Anteojos Diseños',
                                                  'Baby Shower',
                                                  'Cumpleaños Infantiles',
                                                  'Globos',
                                                  'Toda Ocasión'
                                                  ),
                                'COTILLÓN'=>array('BABY SHOWER',
                                                  'CUMPLEAÑOS',
                                                  'DISFRACES',
                                                  'FIESTAS PATRIAS',
                                                  'GLOBOS',
                                                  'HALLOWEEN',
                                                  'MAQUILLAJE',
                                                  'NAVIDAD',
                                                  'PARTY',
                                                  'UTENSILIOS DESECHABLES'
                                                  ),
                                'Toda Ocasión'=>array('IMÁN',
                                                      ),
                                'TEMPORADAS'=>array('Fiestas Patrias',
                                                    'Halloween',
                                                    'Navidad',
                                                    'Otros',
                                                    ),
                                'REGALOS'=>array('ACCESORIOS',
                                                'AGENDAS 2014',
                                                'AGENDAS 2014',
                                                'AGENDAS 2015',
                                                'CINTELA'
                                                ),
                                ),
  'ARTE'=>array('ARTE'=>array('ACUARELA',
                              'ATRILES',
                              'BARNIZ',
                              'BETÚN DE JUDEA',
                              'BLOCKS PROFESIONALES',
                              'CARBÓN DE DIBUJO',
                              'CARTÓN ENTELADO',
                              'CROQUERAS',
                              'ESFUMINOS',
                              'ESPÁTULAS Y ESTECAS',
                              'ESPUMAS Y RODILLOS',
                              'LÍQUIDOS',
                              'PALETAS Y MEZCLADORES',
                              'PINCELES ESPATULADOS',
                              'PINTURA ACRÍLICA',
                              'PINTURA DECORATIVA',
                              'PINTURA MADERA',
                              'PINTURA ÓLEO',
                              'PINTURA TELAS',
                              'PINTURA TRIDIMENSIONAL',
                              'PINTURA VITRAL',
                              'SET ARTISTICO',
                              'TINTA CHINA'
                              ),
                'ARTE - MANUALIDADES'=>array('Accesorios para Pinceles',
                                            'Aceites, Meduims y Líquidos para Arte y Manualidades',
                                            'Brochas',
                                            'Esponjas y Formas para Arte y Manualidades',
                                            'Manualidades Escolares',
                                            'Porta Planos',
                                            'Servilletas para Decoupage',
                                            'Sets de Arte',
                                            'Sets y Herramientas para Artes y Manualidades',
                                            'Vidrios para Decoupage',
                                            ''
                                            ),
                ),
);

// foreach (array_keys($categorias) as $c) {
//   echo '<h1>'.$c . '</h1>';
//   foreach ($categorias as $s) {
//     foreach (array_keys($s) as $p) {
//       echo '<h4>'.$p . '</h4>';
//     }
//   }
// }
//echo '<pre>'; print_r(key($categorias)); echo '</pre>';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-5">
      <?php
      $keys = array_keys($categorias);
      for($i = 0; $i < count($categorias); $i++) {
          echo '<h1>'.$keys[$i] . "{<br></h1>";
          foreach($categorias[$keys[$i]] as $key => $value) {
            echo '<h4>'.$key.'</h4>';
            foreach ($value as $s => $p) {
              echo '<h6>'. $s . " : " . $p . "<br></h6>";
            }
          }
          echo "}<br>";
      }

      //echo '<pre>'; print_r($categorias); echo '</pre>';
      ?>
    </div>
    <div class="col-lg-5 col-md-5">
      <?php echo '<pre>'; print_r($categorias); echo '</pre>'; ?>
    </div>
  </div>
</div>
<!-- <?php
$keys = array_keys($categorias);
for($i = 0; $i < count($categorias); $i++) {
    echo '<h1>'.$keys[$i] . "{<br></h1>";
    foreach($categorias[$keys[$i]] as $key => $value) {
      echo '<h4>'.$key.'</h4>';
      foreach ($value as $s => $p) {
        echo '<h6>'. $s . " : " . $p . "<br></h6>";
      }
    }
    echo "}<br>";
}

//echo '<pre>'; print_r($categorias); echo '</pre>';
?> -->
