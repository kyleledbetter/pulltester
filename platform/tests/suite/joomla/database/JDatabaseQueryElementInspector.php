<?php
/**
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters. All rights reserved.
 * @license    GNU General Public License
 */

require_once JPATH_PLATFORM.'/joomla/database/databasequery.php';

/**
 * Class to expose protected properties and methods in JDatabaseQueryExporter for testing purposes.
 *
 * @package    Joomla.UnitTest
 * @subpackage Database
 */
class JDatabaseQueryElementInspector extends JDatabaseQueryElement
{
	/**
	 * Gets any property from the class.
	 *
	 * @param   string  $property  The name of the class property.
	 *
	 * @return  mixed   The value of the class property.
	 * @since   11.1
	 */
	public function __get($property)
	{
		return $this->$property;
	}

	/**
	 * Sets any property from the class.
	 *
	 * @param   string  $property  The name of the class property.
	 * @param   string  $value     The value of the class property.
	 *
	 * @return  void
	 * @since   11.1
	 */
	public function __set($property, $value)
	{
		return $this->$property = $value;
	}
}