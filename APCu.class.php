<?php
/**
 * unit-apcu:/Apcu.class.php
 *
 * @creation  2020-02-18
 * @version   1.0
 * @package   unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

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

/** Apcu.class.php
 *
 * @creation  2020-02-18
 * @version   1.0
 * @package   unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Apcu implements IF_UNIT
{
	/** use
	 *
	 */
	use OP_CORE, OP_UNIT, OP_UNIT_APCU;
}
