<?php
class persona extends ActiveRecord{
    
    public function segunda($param) {
     return $this->find_all_by_sql("select cedula as a, nombre as b, telefono as c, email as d"
             . " from persona where cedula='".$param."'" );   
    }
    public function actualizar($p1,$p2,$p3,$p4) {
        return $this->sql("update persona set nombre = '".$p1."',
            telefono = '".$p2."', email = '".$p3."' where cedula = '".$p4."'");
        
    }
        public function create($p1,$p2,$p3,$p4) {
        return $this->sql("
INSERT INTO persona (cedula, nombre, telefono, email) VALUES ('".$p1
                . "' , '".$p2."' , '".$p3."' , '".$p4."');");
        
    }
            public function cor() {
        return $this->find_all_by_sql("select persona.nombre as a, persona.email as b from persona inner join gestorpredial on 
(persona.cedula = gestorpredial.cedulagestor); ");
        
    }
    public function registro($a,$b,$c,$d ) {
        return $this->sql("insert into persona (cedula,nombre,telefono,
email) values ('".$a."','".$b."' ,'".$c."','".$d."' );");  
    }
      
}
