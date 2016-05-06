<?php

class CursodivisionTest extends WebTestCase
{
	public $fixtures=array(
		'cursodivisions'=>'Cursodivision',
	);

	public function testShow()
	{
		$this->open('?r=cursodivision/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=cursodivision/create');
	}

	public function testUpdate()
	{
		$this->open('?r=cursodivision/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=cursodivision/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=cursodivision/index');
	}

	public function testAdmin()
	{
		$this->open('?r=cursodivision/admin');
	}
}
