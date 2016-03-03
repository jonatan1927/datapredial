<?php

class Archivador
{
    /**
     * Guardar archivo
     *
     * @return boolean
     */
    public static function guardar($sss)
    {
        $file = Upload::factory($sss);


        // Guarda el archivo en el directorio "public/files/upload"
        if($file->save()) {
             Flash::valid('Operación Exitosa');
             return TRUE;
        }
 
        return FALSE;
    }
}