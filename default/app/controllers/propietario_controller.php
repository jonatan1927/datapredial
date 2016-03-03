<?php
 
class propietarioController extends AppController{
 
    public function index(){
        $propietario = Load::model('propietario');
        $this->inner = $propietario->primera();
    }
}
 
?>