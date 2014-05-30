<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 *
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision$:
 * @author      $Author$:
 * @date        $Date$:
 */

namespace ManiaLib\Database;

class ConnectionParams
{

	/**
	 * Hostname
	 * @var string
	 */
	public $host;

	/**
	 * MySQL username
	 * @var string
	 */
	public $user;

	/**
	 * MySQL password
	 * @var string
	 */
	public $password;

	/**
	 * Default database to select
	 * @var string
	 */
	public $database;

	/**
	 * Connection charset
	 * @var string
	 */
	public $charset = 'utf8';

	/**
	 * Whether to use an SSL connection
	 * @var bool
	 */
	public $ssl = false;
	
	/**
	 * Whether to use a persistant MySQL connection
	 * @var bool
	 */
	public $persistent = false;

}

?>
