<?php

/**
 * Part of the FuelPHP framework.
 *
 * @package   Fuel\Validation
 * @version   2.0
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 */

namespace Fuel\Validation\Exception;

/**
 * Thrown when a specified rule is not known
 *
 * @package Fuel\Validation\Exception
 * @author  Fuel Development Team
 */
class InvalidRule extends \InvalidArgumentException
{

	/**
	 * @param string     $message  This is expected to be left blank or be a field name
	 * @param int        $code
	 * @param \Exception $previous
	 */
	public function __construct($message = '', $code = 0, \Exception $previous = null)
	{
		if (empty($message))
		{
			$message = 'VAL-003: The specified rule is not known.';
		}
		else
		{
			$message = 'VAL-004: The rule ['.$message.'] is not known.';
		}

		parent::__construct($message, $code, $previous);
	}

}