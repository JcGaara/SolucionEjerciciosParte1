<?php
/**
 * PHP Version 5
 * CompleteRange File Doc Comment
 * 
 * @category File
 * @package  Util
 * @author   Saul Ramos <saul20@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     http://ninguno.com
 */
/**
 * CompleteRange Class Doc Comment
 * 
 * Permite completar los numeros faltantes en un arreglo de números, 
 * Se considera que el arreglo ya viene con el formato adecuado, ademas ya se encuentran en orden ascendente.
 * @category Class
 * @package  Util
 * @author   Saul Ramos <saul20@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     http://ninguno.com
 */
Class CompleteRange
{

    function build($numeros_base)
    {
		$numeros_completados=array();
		$indiceArray=0;	
		$longitudArray =  count($numeros_base)-1;	
		for($j=0;$j<$longitudArray;$j++)
		{	
			$valorInicio=$numeros_base[$j];
			$valorFin=$numeros_base[$j+1];		
			$valorFaltantes=$valorFin-$valorInicio;						
			array_push($numeros_completados,$valorInicio);
			for($i=1;$i<$valorFaltantes;$i++)
			{
				array_push($numeros_completados,($valorInicio+$i));	
			}
		}
		array_push($numeros_completados,$valorFin);
		print_r($numeros_completados);
		return $numeros_completados;
    }	            
}
$prueba = new CompleteRange();
$numeros= array(3,5,10);
$prueba->build($numeros);
?>