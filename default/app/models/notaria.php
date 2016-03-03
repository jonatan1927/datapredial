<?php

class notaria extends ActiveRecord {
            public function registro($a,$b ) {
        return $this->sql("INSERT into notaria (idnotaria, nombre)
values ('".$a."','".$b."' );");  
    }
}