<?php

class actividadeconomica extends ActiveRecord {
            public function registro($a,$b ) {
        return $this->sql("insert into actividadeconomica 
(idactividadeconomica,descripcion) values ('".$a."','".$b."' );"); 
            }  
}