<?php
/** op-unit-apcu:/APCU.trait.php
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
use OP\Env;
use OP\Config;

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
	/** Generate salt.
	 *
	 * Separate App and class.
	 * And can recovery from config file.
	 *
	 * @return string
	 */
	static private function _ApcuSalt()
	{
		//	...
		if(!$salt = Config::Get('apcu')['salt'] ?? null ){
			$salt = Env::AppID().', '.__CLASS__;
			/* Stretching is done in self::_ApcuHash().
			$salt = md5($salt);
			$salt = substr($salt, 0, 10);
			*/
		}

		//	...
		return $salt;
	}

	/** Generate hash key.
	 *
	 * @created   2020-02-18
	 * @param     string       $source
	 * @return    string       $hashkey
	 */
	static private function _ApcuHash(string $key):string
	{
		//	...
		static $salt;

		//	...
		if(!$salt ){
			$salt = self::_ApcuSalt();
		}

		//	...
		return substr( md5($salt .', '. $key), 0, 10);
	}

	/** Get value.
	 *
	 * @created   2020-02-18
	 * @param     string       $key
	 * @return    mixed        $value
	 */
	static function Get(string $key)
	{
		//	...
		$key = self::_ApcuHash($key);

		//	...
		return apcu_fetch($key);
	}

	/** Set value.
	 *
	 * @created   2020-02-18
	 * @param     string       $key
	 * @param     mixed        $val
	 * @param     integer      $ttl
	 * @return    boolean      $io
	 */
	static function Set(string $key, $val, $ttl=null)
	{
		//	...
		if( empty($ttl) ){
			//	60s * 60m * 1h
			$ttl = 60 * 60 * 1;
		}

		//	...
		$key = self::_ApcuHash($key);

		//	...
		return apcu_store($key, $val, $ttl);
	}
}
