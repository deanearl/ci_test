<?php

class Common_test extends CI_TestCase {

	public function test_is_php()
	{
		$this->assertEquals(TRUE, is_php('1.2.0'));
		$this->assertEquals(FALSE, is_php('9999.9.9'));
	}

	// ------------------------------------------------------------------------

	public function test_html_escape()
	{
		$this->assertEquals(
			html_escape('Here is a string containing "quoted" text.'),
			'Here is a string containing &quot;quoted&quot; text.'
		);
	}

}