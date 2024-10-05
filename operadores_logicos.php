<?php
/**
*      simbolo                                nombre
*       and                                   and (y)
*       or                                   or (o)
*       !                                   (not) no
*       &&                                  and (y)
*       ||                                    or (o) 
*
 **/
/**
 * tabla de operadores AND
 * exprecion 1                exprecion2           resultado
 * false           &&          false                falso
 * false           &&          true                 false
 * true            &&          true                 true
 * true            &&          false                false
 */
$valor1 = 7;
$valor2 = 2;



var_dump($valor1 == 7 && 2 < 3);
echo "<br>";
var_dump($valor1 == 7 && 9 > 3);

/**
 *      tabla del operador  or
 * exprecion1                    exprecion2        resultado
 * false            ||             false            falso
 * false            ||             true             true
 * true             ||             false            true
 * true             ||             true             true
 * 
 */
var_dump($valor1 ==7 or 2 > 3);
echo "<br>";
var_dump($valor1 == 5 || 9 > 3);
echo "<br>";
var_dump($valor1 == 5 || 1 > 3);