<?php

class escritura extends ActiveRecord {
                public function registro($a,$b,$c,$d ) {
        return $this->sql("INSERT into escritura (idescritura,
idnotaria, numeroescritura, area)
values ('".$a."','".$b."','".$c."','".$d."' );");  
    }
    
}