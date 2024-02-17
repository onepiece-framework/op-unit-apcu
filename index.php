<?php
/** op-unit-apcu:/index.php
 *
 * @created   2020-02-18
 * @version   1.0
 * @package   op-unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	...
if(!function_exists('apcu_add') ){
	Notice::Set("APCu has not been installed.");
//	throw new \Exception("APCu php-module has not been installed.");
}

//	...
include_once(__DIR__.'/APCu.class.php');
