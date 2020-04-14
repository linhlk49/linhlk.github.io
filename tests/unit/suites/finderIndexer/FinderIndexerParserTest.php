<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  com_finder
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

require_once JPATH_ADMINISTRATOR . '/components/com_finder/helpers/indexer/parser.php';

/**
 * Test class for FinderIndexerParser.
 * Generated by PHPUnit on 2012-06-10 at 14:41:55.
 */
class FinderIndexerParserTest extends \PHPUnit\Framework\TestCase
{
	/**
	 * Tests the getInstance method
	 *
	 * @return  void
	 *
	 * @since   3.0
	 * @covers  FinderIndexerParser::getInstance
	 */
	public function testGetInstance()
	{
		$this->assertInstanceOf(
			'FinderIndexerParserHtml',
			FinderIndexerParser::getInstance('html'),
			'getInstance with param "html" returns an instance of FinderIndexerParserHtml.'
		);
	}

	/**
	 * Tests the getInstance method with a non-existing parser
	 *
	 * @return  void
	 *
	 * @since   3.0
	 *
	 * @covers  FinderIndexerParser::getInstance
	 * @expectedException  Exception
	 */
	public function testGetInstance_noParser()
	{
		FinderIndexerParser::getInstance('noway');
	}
}
