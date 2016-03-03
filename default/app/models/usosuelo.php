<?php

class usosuelo extends ActiveRecord {
        public function registro($a,$b ) {
        return $this->sql("insert into usosuelo (idusosuelo,
descripcion) values ('".$a."','".$b."' );");  
    }
    
}
