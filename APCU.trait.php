<?php
/** op-unit-apcu:/APCU.trait.php
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
namespace OP\UNIT;

/** OP_UNIT_APCU
 *
 * @created   2020-02-18
 * @version   1.0
 * @package   unit-apcu
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
trait OP_UNIT_APCU
{
	/** Generate
	 *
	 * @return string
	 */
	static private function _ApcuSalt()
	{
		return __CLASS__;
	}

	/** Generate hash key.
	 *
	 * @param     string       $source
	 * @return    string       $hashkey
	 */
	static private function _ApcuHash(string $key):string
	{
		//	...
		$salt = self::_ApcuSalt();

		//	...
		return substr( md5($salt .', '. $key), 0, 10);
	}

	/** Get value.
	 *
	 * @param     string       $key
	 * @return    string       $value
	 */
	static function Get($key, $ttl=null)
	{
		//	...
		$key = self::_ApcuHash($key);

		//	...
		if( empty($ttl) ){
			//	60s * 60m * 1h
			$ttl = 60 * 60 * 1;
		}

		//	...
		return apcu_fetch($key);
	}

	/** Set value.
	 *
	 * @param     string       $key
	 * @return    integer      $ttl
	 */
	static function Set($key, $val, $ttl)
	{
		return apcu_add($key, $val, $ttl);
	}
}
