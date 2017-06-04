<?php
/**
 * PHP Version 5
 * ChangeString File Doc Comment
 * 
 * @category File
 * @package  Util
 * @author   Saul Ramos <saul20@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     http://ninguno.com
 */
/**
 * ChangeString Class Doc Comment
 * 
 * Se puede aplicar otra logica para la conversión de la letra, sin embargo por tema de procesamiento y de mantenimiento
 *es mejor un mapeo
 *Por ejemplo: si mañana se requiere un cambio de la configuracion de regla, es decir que ahora "a" sea "z" y que "k" sea "o"
 *entonces las modificacaiones solo se realizarian en las variables de mapeo, que tambien pueden estar en archivos planos o en tablas de BD.	
 *En otro escenario, donde no se conoce el universo de valores y de variables se debería optar por crear un metodo con lógica matemática.
 * 
 * @category Class
 * @package  Util
 * @author   Saul Ramos <saul20@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     http://ninguno.com
 */
Class ChangeString
{

    var $arrayOrigen      =array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","J","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    var $arrayDestino     =array("b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","a","B","C","D","E","F","G","H","I","J","J","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","A");
	/**
	 * Implements build().
	 * Metodo que implementa logica de intercambio.
	*/
    function build($cadena)
    {
		$posicion=-1;		
		$cadenaTransformada="";	
		for($i=0;$i<strlen($cadena);$i++)
		{
			$variable = substr($cadena,$i,1);
			$posicion = array_search($variable,$this->arrayOrigen);
			
			if($posicion !==false)
			{
			    $cadenaTransformada=$cadenaTransformada.$this->arrayDestino [$posicion];
			    
			}
			else
			{
				$cadenaTransformada=$cadenaTransformada.$variable;	
			}			
		}
		echo $cadenaTransformada;
		return $cadenaTransformada;
    }	            
}
$prueba = new ChangeString();
$prueba->build("d55y5565az");

?>