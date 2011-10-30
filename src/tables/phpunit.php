<?php

jimport('joomla.database.table');

class TablePhpunit extends JTable
{
	/**
	 * Constructor
	 *
	 * @param  database  $db  A database connector object
	 *
	 * @return  JTableCategory
	 *
	 * @since   11.1
	 */
	public function __construct(&$db)
	{
		parent::__construct('phpunitResults', 'id', $db);
	}		
}
