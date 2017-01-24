<?php
class Producto extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->db = $this->load->database('default',true);
                $local = "1";
        }



        //Obtener local
        public function setLocal($l){
        	if (isset($l)) {
        		$local = $l;
        	}else{
        		$local = '1'; // por ahora 1 seria tienda default
        	}
        	return $local;
        }

        //Obtener datos producto $p codigo
        public function producto($p){

        	$local = '1'; // por ahora 1 seria tienda default

        	if (isset($p)) {
        		$codigo = $p;
        	}else{
        		$codigo = '01001009';
        	}

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
        		pro_codprod = '".$codigo."' and
        		pre_rangoinicial = '1' and
        		pre_codlista='".$local."' and
        		psl_saldo != '0' and
        		psl_codbodega = '1'
            limit 9,
			order by pro_codprod asc ");
			return $result_set->result_array();
        }

        //Obtener cantidad

        //Obtener precio variable

        //Obtener rangos

        //lista de productos
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
left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '10' and pre_correlativo = '1'
order by grupo, subgrupo, subgrupo1,subgrupo2");
          return $result_set->result_array();
        }

        public function add($c){
          $result_set = $this->db->query(
          "update producto set tienefoto = FALSE where codigo = '".$c."'");
        }

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
        limit 9");
			return $result_set->result_array();
        }

        //falta filtrar por oferta
        public function listaOfertas(){
        	$result_set = $this->db->query(
        	"select
				pro_codprod,
				pro_desc,
				pro_glosa,
				pro_imgdefecto,
				pro_oferta,
				pro_novedad,
			    round(pre_rangoinicial) as ri,
			    case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
			    round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
			from
				sto_precios r ,
				sto_producto p
			where
			    r.pre_codprod = p.pro_codprod and
			    pre_rangoinicial = '1' and
			    pre_codlista='1' and
			    pro_invmax != '0' --esto se modificaria a futuro para revisar el stock
			order by pre_correlativo asc
			limit 4");
			return $result_set->result_array();
        }

        //falta filtrar por novedades
        public function listaNovedades(){
        	$result_set = $this->db->query(
        	"select
				pro_codprod,
				pro_desc,
				pro_glosa,
				pro_imgdefecto,
				pro_oferta,
				pro_novedad,
			    round(pre_rangoinicial) as ri,
			    case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
			    round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
			from
				sto_precios r ,
				sto_producto p
			where
			    r.pre_codprod = p.pro_codprod and
			    pre_rangoinicial = '1' and
			    pre_codlista='1' and
			    pro_invmax != '0' --esto se modificaria a futuro para revisar el stock
			order by pre_correlativo asc
			limit 4");
			return $result_set->result_array();
        }

        public function listaPorCat($p,$t=FALSE){
          if ($t) {
            $char = '/';
            $r = $p .$char. $t;
          }else{
            $r = $p;
          }

          $str = str_replace('%20',' ',$r);


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
            left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '10' and pre_correlativo = '1'
           where (psl_saldo > 5 and pro_vigencia = 'S')
           and
           g.aap_texto SIMILAR TO '". $str ."'

           OR

           sg.aap_texto SIMILAR TO'". $str ."'
          order by pro_desc");
			return $result_set->result_array();
        }

        public function record_count($p){
$str = str_replace('%20',' ',$p);
return $this->db->count_all("sto_producto
  left join sto_prodsal on pro_codprod = psl_codprod and psl_codbodega = '1'
  left join sto_prodadic m on m.aap_codprod = pro_codprod and m.aap_codanalisis = '1'
  left join sto_prodadic g on g.aap_codprod = pro_codprod and g.aap_codanalisis = '11'
  left join sto_prodadic sg on sg.aap_codprod = pro_codprod and sg.aap_codanalisis = '12'
  left join sto_prodadic sg1 on sg1.aap_codprod = pro_codprod and sg1.aap_codanalisis = '13'
  left join sto_prodadic sg2 on sg2.aap_codprod = pro_codprod and sg2.aap_codanalisis = '14'
  left join sto_precios pre on pre.pre_codprod = pro_codprod and pre_codlista = '10' and pre_correlativo = '1'
 where (psl_saldo > 5 and pro_vigencia = 'S')
 and
 g.aap_texto SIMILAR TO '". $str ."'

 OR

 sg.aap_texto SIMILAR TO'". $str ."'
 ");
}

}
//and sg.aap_texto = '". $p ."'
//and
//   g.aap_texto LIKE '". $cat[1] ."' or
//   sg.aap_texto LIKE '". $cat[2] ."'



//con saldo

// select
// 	pro_codprod,
// 	pro_desc,
// 	pro_glosa,
// 	pro_imgdefecto,
// 	pro_oferta,
// 	pro_novedad,
// 	round(psl_saldo) as saldo,
//         round(pre_rangoinicial) as ri,
//         case when pre_rangofinal is null then 999999 else round(pre_rangofinal) end as rf,
//         round(((100-pre_maxdesctorecargo)/100)*pre_precio) as precio
// 		from sto_precios r , sto_producto p , sto_prodsal
// 		where
//         r.pre_codprod = p.pro_codprod and
//         p.pro_codprod = psl_codprod and
//         pre_rangoinicial = '1' and
//         pre_codlista='1' and
//         psl_saldo != '0' and
//         psl_codbodega = '1'
// 	order by pro_codprod asc
