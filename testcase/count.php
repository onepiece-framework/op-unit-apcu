<?php
/** op-unit-apcu:/Apcu.class.php
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

/** use
 *
 */

/* @var $apcu UNIT\APCu */
$apcu = OP()->Unit('APCu');

//	...
$key = 'count';

//	...
$val = $apcu->Get($key);

//	...
$apcu->Set($key, $val + 1);

//	...
D($val);
