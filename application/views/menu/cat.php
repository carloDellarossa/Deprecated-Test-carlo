<style>
.navbar-cat {
  background-color: #ffffff;
  border-color: #b2b1b1;
  top: 50px;
  z-index: 9;
  padding: 4px;
}
.navbar-cat .navbar-brand {
  color: #000000;
}
.navbar-cat .navbar-brand:hover,
.navbar-cat .navbar-brand:focus {
  color: #000000;

}
.navbar-cat .navbar-text {
  color: #000000;
}
.navbar-cat .navbar-nav > li > a {
  color: #000000;
}
.navbar-cat .navbar-nav > li > a:hover,
.navbar-cat .navbar-nav > li > a:focus {
  color: #000000;
}
.navbar-cat .navbar-nav > li > .dropdown-menu {
  background-color: #ffffff;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a {
  color: #000000;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #cecece;
}
.navbar-cat .navbar-nav .open .dropdown-menu > .active > a,
.navbar-cat .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-cat .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-nav > .active > a,
.navbar-cat .navbar-nav > .active > a:hover,
.navbar-cat .navbar-nav > .active > a:focus {
  border: ;
  border-color : #cecece;
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-nav > .open > a,
.navbar-cat .navbar-nav > .open > a:hover,
.navbar-cat .navbar-nav > .open > a:focus {
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-toggle {
  border-color: #cecece;
}
.navbar-cat .navbar-toggle:hover,
.navbar-cat .navbar-toggle:focus {
  background-color: #cecece;
}
.navbar-cat .navbar-toggle .icon-bar {
  background-color: #000000;
}
.navbar-cat .navbar-collapse,
.navbar-cat .navbar-form {
  border-color: #000000;
}
.navbar-cat .navbar-link {
  color: #000000;
}
.navbar-cat .navbar-link:hover {
  color: #000000;
}

@media (max-width: 767px) {
  .navbar-cat .navbar-nav .open .dropdown-menu > li > a {
    color: #000000;
  }
  .navbar-cat .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-cat .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #000000;
  }
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #000000;
    background-color: #cecece;
  }
}
/*
carro de compra */
.lista-carro{
	margin-top:10px;
	margin-bottom:20px;
	font-size:13px;
  margin: 0;
  padding: 0;
}

.lista-productos-carro{
	margin-left:-10px;
	min-height:100vh;
  max-width : 252px
}
.lista-productos-carro li{
	list-style:none;
  padding:0 0 0 0;
	margin-left:0;
	float:left
}
 .lista-productos-carro li a{
	color:#333;
	display:block
}
 .lista-productos-carro li a:hover{
	text-decoration:none
}
.lista-carro .producto-carro{
	position:relative;
  padding:0 10px;
	border:1px solid transparent;
	background-color:#fff
}
.lista-carro .producto-carro:hover{
	box-shadow:0 3px 6px 0 rgba(51,51,51,.298039)
}
.lista-carro .imagen-carro{
	padding-top:10px;
	text-align:center;
	min-width:75px;
	height:75px;
	overflow:hidden
}
.lista-carro .imagen-carro i{
	content:'';
	display:inline-block;
	height:100%;
	vertical-align:middle;
	width:0;
	font-size:0;
	overflow:hidden
}
.lista-carro .imagen-carro img{
	display:inline-block;
	vertical-align:middle;
	max-width:75px;
	max-height:75px
}
.lista-carro .producto-carro-info{
	position:relative;
	height:100px;
	padding-top:5px
}
.lista-carro .nombre{
	position:absolute;
	right:0;
	/*top:28px;*/
	line-height:20px;
	font-size:10px;
}
.lista-carro .precio{
	text-align:center;
	display:block;
	color:#545454;
	font-weight:700;
	font-size:18px;
	margin-right:10px
}
.lista-carro .btnEliminar{
	text-align:center;
	padding-top:10px
}
.lista-carro .btnEliminar a{
	visibility:hidden;
	font-size:16px;
	background-color:#666;
	padding:0 80px;
	line-height:50px;
	display:inline-block;
	color:#fff;
	border-radius:4px
}
.lista-carro .btnEliminar a:hover{
	text-decoration:none;
	background-color:#999
}
.contenedor-producto-carro{
	margin-top:20px;
  min-height:100px;
  max-width : 260px
}

.scroll {
    height: auto;
    max-height: 150%;
    overflow-x: auto;
}

.categorias {

}
.subcat li {
  	list-style:none;
    padding:0 0 0 0;
    margin-left:0;
    float:left
}

/*sub menu */

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

.scrollable-menu {
    height: auto;
    max-height: 250px;
    padding: 5px;
    overflow-x: hidden;
}
</style>


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
  'Escolar'=> array('CIENCIAS'=>array('INSTRUMENTOS DE LABORATORIO',
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
  'Jugeteria '=>array('JUGUETERÍA Y ENTRETENCIÓN'=>array('ACCESORIOS DEPORTE',
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
  'Arte'=>array('ARTE'=>array('ACUARELA',
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
//echo '<pre>'; print_r($categorias); echo '</pre>';
?>
		<nav class="navbar navbar-cat navbar-fixed-top">
		  <div class="container-fluid" id="carro">
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		    	<!--Boton vista en mibil -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Menu Mobil</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
		      	<!-- Icono marca link a Inicio -->
		    	<a class="navbar-brand" href="Inicio"><img class="" alt="Brand" src="<?php echo site_url('img/logo.png');?>" align="top"></a>
		      <ul class="nav navbar-nav navbar-left" >
			        <!--Menu Categorias -->
              <?php
              $keys = array_keys($categorias);
              for($i = 0; $i < count($categorias); $i++) {
                 ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $keys[$i] ;?><span class="caret"></span></a>
                <ul class="dropdown-menu multi-level">
                  <?php
                  foreach($categorias[$keys[$i]] as $key => $value) {
                    ?>
                            <li class="dropdown-submenu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php echo $key ;?>
                                <ul class="dropdown-menu scrollable-menu">
                                <?php
                                foreach ($value as $s => $p) { ?>

                                    <li><a href="#"><?php echo $p;?></a></li>

                                <?php
                                }
                                ?>
                                </ul>
                              </a>
                            </li>
                          <!-- <a href="#"><h5><?php echo $key; ?></h5></a> -->

                  <?php }
                  ?>
              </ul>
            </li>
              <?php }
              ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;<span class="badge"><?php echo $this->cart->total_items(); ?></span>
            </a>
              <ul class="dropdown-menu animated slideInRight lista-productos-carro scroll" >
                <div class="lista-carro" >
                  <div class="contenedor-producto-carro container">
                  <?php
                    $carro = $this->cart->contents();
                    if(isset($carro )){
                      foreach ($carro as $p) {
                  ?>
                        <li class="col-lg-12 col-md-12 col-sm-12">
                          <div class="producto-carro">
                            <div class="imagen-carro">
                              <img  src="<?php echo site_url('img/nodisponible.jpg');?>"/>
                            </div>
                            <div class="producto-carro-info">
                              <div class="row">
                                <div class="tamaño">
                                  <div class="precio col-lg-6 col-md-6 col-sm-2">
                                    <span>Precio <?php echo number_format($p['price'],'0',',','.')?></span>
                                  </div>
                                  <div class="nombre col-lg-6 col-md-6 col-sm-2">
                                    <span><?php echo $p['name']; ?></span>
                                  </div>
                                  <div class="cantidad col-lg-6 col-md-6 col-sm-2">
                                    <span>Cantidad : <?php echo $p['qty']; ?></span>
                                    <?php echo anchor('index.php/Inicio/remove/'.$p['rowid'],'<i class="glyphicon glyphicon-trash"></i>
    <span class="hidden-tablet"></span>'); ?>
                                  </div>
                                  <div class="col-lg-6 col-md-2 col-sm-2">
                                    <h1></h1>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>


                        <?php
                      } ?>
                      <li class="col-lg-12 col-md-12 col-sm-12">
                        <div class="info-carro">
                          <div class="info-carro-total">
                              <br>
                              <i class="glyphicon glyphicon-shopping-cart"></i>
                              <span>Total:</span>
                              <span><?php echo $this->cart->total(); ?></span>
                          </div>
                        </div>
                        <?php echo anchor('index.php/Carro', 'Ir al carro de compra') ?>
                        <?php echo anchor('index.php/Carro', 'Finalisar la compra') ?>
                      </li>
                       <?php }else{ ?>
                          <li>
                            <h2>No hay productos en el carro<h2>
                          </li>
                        <?php } ?>
                  </div>
                </div>
              </ul>
            </li>
          </ul>
		    </div> <!-- termina menu de cateoras de la izq y la parte colapsanle-->
		  </div><!-- termina contenedor -->
		</nav>


    <script type='text/javascript'>
        /* attach a submit handler to the form */
        $("#formoid").submit(function(event) {

          /* stop form from submitting normally */
          event.preventDefault();

          /* get the action attribute from the <form action=""> element */
          var $form = $( this ),
              url = $form.attr( 'action' );

          /* Send the data using post with element id name and name2*/
          var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );

          /* Alerts the results */
          posting.done(function( data ) {
            alert('success');
          });
        });
    </script>
