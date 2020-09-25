<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* DB class
*/
class DB {
	private $adaptor;

                public static $log = array();
                public static $time = 0;
            

	/**
	 * Constructor
	 *
	 * @param	string	$adaptor
	 * @param	string	$hostname
	 * @param	string	$username
     * @param	string	$password
	 * @param	string	$database
	 * @param	int		$port
	 *
 	*/
	public function __construct($adaptor, $hostname, $username, $password, $database, $port = NULL) {
		$class = 'DB\\' . $adaptor;

		if (class_exists($class)) {
			$this->adaptor = new $class($hostname, $username, $password, $database, $port);
		} else {
			throw new \Exception('Error: Could not load database adaptor ' . $adaptor . '!');
		}
	}

	/**
     * 
     *
     * @param	string	$sql
	 * 
	 * @return	array
     */
	public function query($sql) {
		
                $start = microtime(true);

                $backtrace = debug_backtrace();

                $file = (isset($backtrace[1]['file']) ? $backtrace[1]['file'] : $backtrace[0]['file']) . ': ' . (isset($backtrace[1]['line']) ? $backtrace[1]['line'] : $backtrace[0]['line']);

                $file = str_replace(realpath(DIR_SYSTEM . '..') . '/', '', $file);

                $query = $this->adaptor->query($sql);

                $end = microtime(true);

                $time = $end - $start;

                //static::$log[] = sprintf("%3.1f @ %s - %s", $time, $file, $sql);

                static::$log[] = array(
                    'time' => sprintf("%.6f", $time),
                    'file' => $file,
                    'sql' => $sql
                );

                static::$time += $time;

                return $query;
            
	}

	/**
     * 
     *
     * @param	string	$value
	 * 
	 * @return	string
     */
	public function escape($value) {
		return $this->adaptor->escape($value);
	}

	/**
     * 
	 * 
	 * @return	int
     */
	public function countAffected() {
		return $this->adaptor->countAffected();
	}

	/**
     * 
	 * 
	 * @return	int
     */
	public function getLastId() {
		return $this->adaptor->getLastId();
	}
	
	/**
     * 
	 * 
	 * @return	bool
     */	
	public function connected() {
		return $this->adaptor->connected();
	}
}