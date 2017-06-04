<?php
/**
 * PHP Version 5
 * ClearPar File Doc Comment
 * 
 * @category File
 * @package  Util
 * @author   Saul Ramos <saul20@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     http://ninguno.com
 */
/**
 * ClearPar Class Doc Comment
 * 
 * Elaborar una cadena con la cantidad de pares parentesis.
 * @category Class
 * @package  Util
 * @author   Saul Ramos <saul20@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     http://ninguno.com
 */
Class ClearPar
{

    function build($cadena)
    {
		$flag_inicio = false;
		$flag_fin = false;
		$simbolo_inicio = "(";
		$simbolo_fin = ")";
		$variable="";
		$cadenaNueva="";
		for($j=0;$j<strlen($cadena);$j++)
		{	
	        $variable = substr($cadena,$j,1);
			if($simbolo_inicio==$variable && $flag_fin==false)
			{
					$flag_inicio=true;
			}
			else
			{
				if($simbolo_fin==$variable && $flag_inicio==true)
				{
						$flag_fin=true;
				}
			}
			if($flag_inicio && $flag_fin)
			{
				$cadenaNueva=$cadenaNueva."()";
				$flag_inicio=false;
				$flag_fin=false;
			}
		}		
		echo $cadenaNueva;
		return $cadenaNueva;
    }	            
}
$prueba = new ClearPar();
$prueba->build(")))()(()");
?>