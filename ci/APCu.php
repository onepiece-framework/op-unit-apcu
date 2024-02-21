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
$result =  'Success!';
$args   = ['ci.phtml',['arg1'=>'Success!']];
$ci->Set('Template', $result, $args);

//	_ApcuSalt
$result = 'CI1, OP\UNIT\APCu';
$args   = null;
$ci->Set('_ApcuSalt', $result, $args);

//	_ApcuHash
$result = '562c14e25b';
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
