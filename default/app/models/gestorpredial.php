<?php
class Gestorpredial extends ActiveRecord{
    
        public function create($p1) {
        return $this->sql("INSERT INTO gestorpredial ( cedulagestor )  VALUES  ('".$p1."');");
        
    }
}

