<?php
require_once "controllers/Pages.php";

class PagesTest extends PHPUnit_Framework_TestCase
{
	public function testRenderReturnsHelloWorld()
	{
		$pages = new Pages();
		$expected = "Hello World";
		$this->assertEquals($expected, $pages->render());
	}
}
