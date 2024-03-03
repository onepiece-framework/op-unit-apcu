<?php
/** op-unit-apcu:/ci/APCu.php
 *
 * @created     2024-02-17
 * @version     1.0
 * @package     op-unit-apcu
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

/* @var $ci UNIT\CI */
$ci = OP::Unit('CI');

//	Template
$arg1   = 'foo';
$arg2   = 'bar';
$args   = ['ci.phtml',['arg1'=>$arg1, 'arg2'=>$arg2]];
$result = $arg1 . $arg2;
$ci->Set('Template', $result, $args);

//	_ApcuSalt
$result = 'CI, OP\UNIT\APCu';
$args   = null;
$ci->Set('_ApcuSalt', $result, $args);

//	_ApcuHash
$result = '7cd963e1c6';
$args   = 'hash_key';
$ci->Set('_ApcuHash', $result, $args);

//	Set
$result =  false;
$args   = ['hash_key','save_value'];
$ci->Set('Set', $result, $args);

//	Get
$result =  false;
$args   = ['hash_key'];
$ci->Set('Get', $result, $args);

//	...
return $ci->GenerateConfig();
