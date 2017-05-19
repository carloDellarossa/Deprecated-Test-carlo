<?php
class Producto extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->db = $this->load->database('default',true);
                $local = "1";
        }
//TODO falta agregar lista al comienso de todas las querys
//TODO modular las funciones

//LISTAR PRODUCTO ESPESIFICO
        public function producto($p){

        	$local = '1'; // por ahora 1 seria tienda default

        	$result_set = $this->db->query(
	        	"select
    				pro_codprod,
    				pro_desc,
    				pro_glosa,
    				pro_imgdefecto,
    				pro_oferta,
    				pro_novedad,
    				round(psl_saldo) as saldo,
        		round(pre_rangoinicial) as ri,
        		case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
        		round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
			from
				sto_precios r ,
				sto_producto p ,
				sto_prodsal
			where
        		r.pre_codprod = p.pro_codprod and
        		p.pro_codprod = psl_codprod and
        		pro_codprod = '".$p."' and
        		pre_rangoinicial = '1' and
        		pre_codlista='1' and
        		psl_saldo != '0' and
        		psl_codbodega = '1' ");
			return $result_set->result_array();
        }

//LISTA RANGO DE PRECIO DE UN PRODUCTO EN ESPESIFICO
        public function rangos($cod){
          $result_set = $this->db->query(
            "select
              round(pre_rangoinicial) as ri,
              case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
              round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
              from sto_precios
            where
              pre_codprod = '".$cod."'
            and
              pre_codlista ='1'
            order by ri");

          return $result_set -> result_array();
         }

//LISTADO POR PRODUCTOS MAS VENDIDOS
//TODO FALTA FILTRAR
//
        public function listaProductos(){
        	$result_set = $this->db->query(
        	"select
    				pro_codprod,
    				pro_desc,
    				pro_glosa,
    				pro_imgdefecto,
    				pro_oferta,
    				pro_novedad,
    				round(psl_saldo) as saldo,
            		round(pre_rangoinicial) as ri,
            		case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
            		round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
    			from
    				sto_precios r ,
    				sto_producto p ,
    				sto_prodsal
    			where
        		r.pre_codprod = p.pro_codprod and
        		p.pro_codprod = psl_codprod and
        		pre_rangoinicial = '1' and
        		pre_codlista='1' and
        		psl_saldo != '0' and
        		psl_codbodega = '1'

			order by pro_codprod asc
        limit 12");
			return $result_set->result_array();
        }

//LISTADO POR OFERTAS
        public function listaOfertas(){
        	$result_set = $this->db->query(
        	"select
				pro_codprod,
				pro_desc,
				pro_glosa,
				pro_imgdefecto,
				pro_oferta,
				pro_novedad,
			    round(r.pre_rangoinicial) as ri,
			    case when r.pre_rangofinal is null then 999999 else round(r.pre_rangofinal) end as rf,
			    round(((100-r.pre_maxdesctorecargo)/100)*r.pre_precio) as precio
          from
    				sto_precios r ,
    				sto_producto p
            left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
            left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
            left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
            left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
            left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
            left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
            left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
    			where
             (psl_saldo > 1 and pro_vigencia = 'S') and
    			    r.pre_codprod = p.pro_codprod and
    			    r.pre_rangoinicial = '1' and
    			    r.pre_codlista='1'
			order by r.pre_maxdesctorecargo DESC
			limit 6");
			return $result_set->result_array();
        }

//LISTADO POR NOVEDADES
        public function listaNovedades(){
        	$result_set = $this->db->query(
        	"select
				pro_codprod,
				pro_desc,
				pro_glosa,
				pro_imgdefecto,
				pro_oferta,
				pro_novedad,
			    round(r.pre_rangoinicial) as ri,
			    case when r.pre_rangofinal is null then 999999 else round(r.pre_rangofinal) end as rf,
			    round(((100-r.pre_maxdesctorecargo)/100)*r.pre_precio) as precio
			from
				sto_precios r ,
				sto_producto p
        left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
        left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
        left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
        left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
        left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
        left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
        left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
			where
         (psl_saldo > 1 and pro_vigencia = 'S') and
			    r.pre_codprod = p.pro_codprod and
			    r.pre_rangoinicial = '1' and
			    r.pre_codlista='1'
			order by p.feccreacion DESC
			limit 6");
			return $result_set->result_array();
        }

//LISTADO POR CATEGORIAS
        public function listaPorCat($limite,$offset,$grupo,$subGrupo,$filtro=FALSE){
          //validacion de subgrupo
          if($subGrupo == 0){
            $objtivo = 'g.aap_texto';
            $cat = $grupo ;
          }else{
            $objtivo = 'sg.aap_texto';
            $cat = $subGrupo;
          }
          //validacion de filtro
          if($filtro==FALSE){
            $f='';
          }else{
            $f="and
              (m.aap_texto  = '". $filtro ."' or
              sg1.aap_texto = '". $filtro ."' or
              sg2.aap_texto = '". $filtro ."'
              )";
          }

          $result_set = $this->db->query(
          "select
              pro_codprod,
              pro_desc,
              pro_glosa,
              m.aap_texto as marca,g.aap_texto as grupo,sg.aap_texto as subgrupo,sg1.aap_texto as subgrupo1,sg2.aap_texto as subgrupo2,pro_vigencia as vigencia,
              case
              --when (puc.precio is not null and puc.precio >1) then puc.precio
              when (pro_costoventa is not null and pro_costoventa>0) then round(pro_costoventa)
              when (pro_costoventa is null or pro_costoventa=0) and (pro_costo is not null AND pro_costo<>0) then round(pro_costo)
              when (pro_costoventa is null or pro_costoventa=0) and pro_costoestandar is not null then round(pro_costoestandar)
              else 0 end as costo,
              case when psl_saldo is null then 0 else round(psl_saldo) end as saldo,
              case when pre.pre_precio is null then 1 else
              round((pre.pre_precio * ((100::numeric - pre.pre_maxdesctorecargo) / 100::numeric)/1.19), 0) end as l10,
              round(pre_rangoinicial) as ri,
              case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
              round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
          from sto_producto
            left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
            left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
            left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
            left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
            left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
            left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
            left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
          where (psl_saldo > 1 and pro_vigencia = 'S')
          and
           ".$objtivo." SIMILAR TO '". $cat ."'
           ". $f ."
          order by pro_desc limit ".$limite." offset ".$offset." ");

			    return $result_set->result_array();

        }

//CONTAR ROWS PARA PAGINACION
        public function record_count($valor,$cat,$filtro=FALSE){
          if($cat=='grupo'){
            $objtivo = 'g.aap_texto';
          }else if ($cat == 'subgrupo'){
            $objtivo = 'sg.aap_texto';
          }

          if($filtro==FALSE){
            $f='';
          }else{
            $f="and
              (m.aap_texto  = '". $filtro ."' or
              sg1.aap_texto = '". $filtro ."' or
              sg2.aap_texto = '". $filtro ."'
              )";
          }
          return $this->db->count_all("sto_producto
            left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
            left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
            left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
            left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
            left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
            left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
            left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
           where (psl_saldo > 5 and pro_vigencia = 'S')
           and
           ".$objtivo." Similar TO '". $valor ."'
           ". $f ." ");
          }

//TESTING
          public function testFotos(){
            $result_set = $this->db->query(
            "select
              DISTINCT
                      g.aap_texto as grupo,sg.aap_texto as subgrupo,sg1.aap_texto as subgrupo1,sg2.aap_texto as subgrupo2
              from sto_producto
              left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
              left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
              left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
              left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
              left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
              left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
              left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
            order by grupo, subgrupo, subgrupo1,subgrupo2");
            return $result_set->result_array();
          }


//obtener filtros por categoria y subcategori
          public function filtros($grupo,$subGrupo,$filtro=false){

                  if($subGrupo == 0){
                    $objtivo = 'g.aap_texto';
                    $cat = $grupo ;
                  }else{
                    $objtivo = 'sg.aap_texto';
                    $cat = $subGrupo;
                  }

                  //TODO segundo filtro
                  if($filtro==FALSE){
                    $f='';
                  }else{
                    $f="and
                      (m.aap_texto  = '". $filtro ."' or
                      sg1.aap_texto = '". $filtro ."' or
                      sg2.aap_texto = '". $filtro ."'
                      )";
                  }

                  $paramatros = array(
                    'marca' => 'm.aap_texto as marca',
                    'subgrupo1' => 'sg1.aap_texto as subgrupo1',
                    'subgrupo2' => 'sg2.aap_texto as subgrupo2');
                  $resultado = [];
                  foreach ($paramatros as $pam => $v) {
                    //$k = array_keys($f);
                    $result_set = $this->db->query(
                    "select distinct
                    ".$v."
                    from sto_producto
                      left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
                      left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
                      left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
                      left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
                      left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
                      left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
                      left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
                    where
                      (psl_saldo > 1 and pro_vigencia = 'S')
                    and
                    ".$objtivo." SIMILAR TO '". $cat ."'
                    ". $f ." ");
                    $resultado[$pam] = $result_set->result_array();
                  }
                  return $resultado;
                }
//Buscar
public function buscar($aBuscar){
  $result_set = $this->db->query(
  "select
    pro_codprod,
    pro_desc,
    pro_glosa,
    pro_imgdefecto,
    pro_oferta,
    pro_novedad,
    round(r.pre_rangoinicial) as ri,
    case when r.pre_rangofinal is null then 999999 else round(r.pre_rangofinal) end as rf,
    round(((100-r.pre_maxdesctorecargo)/100)*r.pre_precio) as precio
  from
    sto_precios r ,
    sto_producto p
    left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
    left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
    left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
    left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
    left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
    left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
    left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '1' and pre_correlativo = '1'
  where
   (psl_saldo > 1 and pro_vigencia = 'S')
  and r.pre_codprod = p.pro_codprod
  and r.pre_rangoinicial = '1'
  and r.pre_codlista='1'
  and (pro_codprod SIMILIAR TO '".$aBuscar."'
  or pro_desc SIMILIAR TO '".$aBuscar."'
  or pro_glosa SIMILIAR TO '".$aBuscar."'
  or m.aap_texto SIMILIAR TO '".$aBuscar."'
  or sg1.aap_texto SIMILIAR TO '".$aBuscar."'
  or sg2.aap_textoSIMILIAR TO '".$aBuscar."')
  order by p.feccreacion DESC
  ");
return $result_set->result_array();
}

}
