<?php

class tradicion extends ActiveRecord {
 public function registro($a,$b, $c ) {
 return $this->sql(" insert into tradicion
 (idmatriculainmobiliaria,idescritura,
 direccion) values ('".$a."','".$b."','".$c."' );"); 
            }    
}