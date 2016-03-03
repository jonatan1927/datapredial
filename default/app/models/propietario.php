<?php

class propietario extends ActiveRecord {

public function primera(){
 
         return $this->find_all_by_sql("select fichapredial.idficha as f ,propietario.cedulapropietario as c, persona.nombre as no, persona.telefono as t, 
             registro.idpredio p, 
municipio.nombre as n, departamento.nombre as d, tradicion.idmatriculainmobiliaria as m, tradicion.direccion as dir, escritura.numeroescritura as e, 
notaria.nombre as not,predio.shape_area as ate,arearequerida.shape_area as ar,predio.shape_area-arearequerida.shape_area as aso
from propietario inner join persona on (persona.cedula=propietario.cedulapropietario)
inner join registro on (propietario.cedulapropietario=registro.cedulapropietario)
inner join barriovereda on (registro.idbarriovereda=barriovereda.idbarriovereda)
inner join municipio on (barriovereda.idmunicipio=municipio.idmunicipio)
inner join departamento on (municipio.departamento=departamento.iddepartamento)
inner join tradicion on (registro.idmatriculainmobiliaria=tradicion.idmatriculainmobiliaria)
inner join escritura on (tradicion.idescritura=escritura.idescritura)
inner join notaria on (escritura.idnotaria=notaria.idnotaria)
inner join fichapredial on (registro.idpredio=fichapredial.idpredio)
inner join predio on (predio.idpredio_1=fichapredial.idficha)
inner join arearequerida on (predio.idpredio_1=arearequerida.idpredio_1)");
    }
public function segunda($rr) {
    return $this->find_all_by_sql("select fichapredial.idficha as f ,propietario.cedulapropietario as c, persona.nombre as no, persona.telefono as t, 
             registro.idpredio p, 
municipio.nombre as n, departamento.nombre as d, tradicion.idmatriculainmobiliaria as m, tradicion.direccion as dir, escritura.numeroescritura as e, 
notaria.nombre as not,predio.shape_area as ate,arearequerida.shape_area as ar,predio.shape_area-arearequerida.shape_area as aso
from propietario inner join persona on (persona.cedula=propietario.cedulapropietario)
inner join registro on (propietario.cedulapropietario=registro.cedulapropietario)
inner join barriovereda on (registro.idbarriovereda=barriovereda.idbarriovereda)
inner join municipio on (barriovereda.idmunicipio=municipio.idmunicipio)
inner join departamento on (municipio.departamento=departamento.iddepartamento)
inner join tradicion on (registro.idmatriculainmobiliaria=tradicion.idmatriculainmobiliaria)
inner join escritura on (tradicion.idescritura=escritura.idescritura)
inner join notaria on (escritura.idnotaria=notaria.idnotaria)
inner join fichapredial on (registro.idpredio=fichapredial.idpredio)
inner join predio on (predio.idpredio_1=fichapredial.idficha)
inner join arearequerida on (predio.idpredio_1=arearequerida.idpredio_1) where fichapredial.idficha = '".$rr."'");   
}
    public function registro($a ) {
        return $this->sql("insert into propietario (cedulapropietario) values ('".$a."' );");  
    }
}
?>