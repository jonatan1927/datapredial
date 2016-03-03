<?php

class registro extends ActiveRecord {
    public function re($a, $b, $c, $d, $e, $f ) {
 return $this->sql("insert into registro (idpredio,
idbarriovereda,idusosuelo,
idactividadeconomica,cedulapropietario,
idmatriculainmobiliaria) values  ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."' );"); 
            }    
}

