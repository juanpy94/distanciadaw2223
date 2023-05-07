<?php

// Modificacion de la activadad 2.3

/**
 * Función que devuelve la operación que escojamos entre dos números, puede
 * ser sumar, restar, multiplicar o dividir.
 * 
 * @author Juan Pablo Peñuela Cámara
 * 
 * @version 1.0
 * 
 * {@internal Si no escojemos el nombre de la operación correcta el resultado será 0.}
 * 
 * @param Int $n1 primer valor tipo Int.
 * @param Int $n2 segundo valor tipo Int.
 * @param Int $operacion operación ha realizar con los dos valores.
 * @return Int resultado de la operación del primer valor con el segundo valor.
 */

function operaciones($n1, $n2, $operacion){
    $resultado = 0;
    if($operacion == "Sumar"){
        $resultado = $n1 + $n2;
    }else
        if($operacion == "restar"){
            $resultado = $n1 - $n2;
        }else
            if($operacion == "Multiplicar"){
                $resultado = $n1 * $n2;
            }else
                if($operacion == "Dividir"){
                    $resultado = $n1 / $n2;
                }
                return $resultado;
}

/**
 * Determina si un número es par o no.
 * 
 * @author Juan Pablo Peñuela Cámara
 * 
 * @version 2.0
 * 
 * @param Int $numero número que vamos a comprobar.
 * 
 * @return bool Devuelve true si el número es par y si no es par
 * devuelve false.
 */

function es_par($numero){
    $resultado = false;
    if($numero % 2 == 0){
        $resultado = true;
    }else{
        $resultado = false;
    }
    return $resultado;
}

?>