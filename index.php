<?php
/**
 * unit-apcu:/index.php
 *
 * @creation  2020-02-18
 * @version   1.0
 * @package   unit-apcu
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
