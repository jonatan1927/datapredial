<?php

class fichapredial extends ActiveRecord {
        public function registro($a,$b, $c) {
 return $this->sql("insert into fichapredial (idficha,idpredio,
cedulagestor)values ('".$a."','".$b."','".$c."' );"); 
            }
         public function borra($a) {
 return $this->sql("delete from fichapredial where idficha ='".$a."';"); 
            }
             public function consulta($a) {
 return $this->find_all_by_sql("select fichapredial.idficha as ficha ,propietario.cedulapropietario as cedula, persona.nombre as nombre, persona.telefono as telefono, 
registro.idpredio catastral, persona.email as email,
municipio.idmunicipio as municipio, departamento.iddepartamento as departamento, tradicion.idmatriculainmobiliaria as matricula, 
tradicion.direccion as direccion, escritura.numeroescritura as escritura, 
notaria.nombre as notaria , barriovereda.idbarriovereda as barrio,
usosuelo.idusosuelo as usosuelo, actividadeconomica.idactividadeconomica,
 predio.shape_area as ate,arearequerida.shape_area as ar,predio.shape_area-arearequerida.shape_area as aso
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
inner join arearequerida on (predio.idpredio_1=arearequerida.idpredio_1)
inner join usosuelo on (usosuelo.idusosuelo=registro.idusosuelo)
inner join actividadeconomica on (actividadeconomica.idactividadeconomica=registro.idactividadeconomica) 
where fichapredial.idficha ='".$a."';" ); 
            }
 public function consultados($a) {
 return $this->find_all_by_sql("select fichapredial.idficha as ficha ,propietario.cedulapropietario as cedula, persona.nombre as nombre, persona.telefono as telefono, 
registro.idpredio catastral, persona.email as email,
municipio.nombre as municipio, departamento.nombre as departamento, tradicion.idmatriculainmobiliaria as matricula, tradicion.direccion as direccion, escritura.numeroescritura as escritura, 
notaria.nombre as notaria , barriovereda.nombre as barrio,
usosuelo.descripcion as usosuelo, actividadeconomica.descripcion as actividad,fichapredial.cedulagestor as nom,
 predio.shape_area as ate,arearequerida.shape_area as ar,predio.shape_area-arearequerida.shape_area as aso
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
inner join arearequerida on (predio.idpredio_1=arearequerida.idpredio_1)
inner join usosuelo on (usosuelo.idusosuelo=registro.idusosuelo)
inner join actividadeconomica on (actividadeconomica.idactividadeconomica=registro.idactividadeconomica) 
where fichapredial.idficha ='".$a."';" ); 
            }  
}


