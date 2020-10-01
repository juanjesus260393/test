<?php

/*
 *   proyecto Tienda en linea Silverplastic
 *   Nombre: Helpers
 *   Autor: Juan Jesus Garcia Centeno
 *   Fecha: 012-01-2020
 *   Versión: 1.0
 *   Descripcion: Clase en la que se definen funciones que se pueden emplear en diferentes acciones..
 */

class Helpers {
    

    /*
     *  generateRamdonids
     *  Funcion que genera identificadores aleatorios para los registros de la base de datos.
     */
    public static function generateRamdonids() {
        $rango = 9;
        $longitud = $rango;
        $id = '';
        $pattern = '1234567890';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < $longitud; $i++) {
            $id .= $pattern{mt_rand(0, $max)};
        }
        return $id;
    }
    
}



