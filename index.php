<?php
/** op-unit-apcu:/index.php
 *
 * @created   2020-02-18
 * @version   1.0
 * @package   op-unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
if(!function_exists('apcu_add') ){
	OP\Notice::Set("APCu has not been installed.");
}

//	...
include(__DIR__.'/APCU.trait.php');
include(__DIR__.'/APCu.class.php');
