<?php
/** op-unit-apcu:/APCu.class.php
 *
 * @created   2020-02-18
 * @version   1.0
 * @package   op-unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP\UNIT;

/** use
 *
 */
use OP\OP_CORE;
use OP\OP_UNIT;
use OP\IF_UNIT;

/** include
 *
 */
include_once(__DIR__.'/APCU.trait.php');

/** APCu.class.php
 *
 * @created   2020-02-18
 * @version   1.0
 * @package   unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class APCu implements IF_UNIT
{
	/** use
	 *
	 */
	use OP_CORE, OP_UNIT, OP_UNIT_APCU;
}
