<?php

class barriovereda extends ActiveRecord {
 public function registro($a,$b, $c ) {
 return $this->sql(" insert into barriovereda;
 (idbarriovereda,idmunicipio,
 nombre) values  ('".$a."','".$b."','".$c."' );"); 
            } 
    
}