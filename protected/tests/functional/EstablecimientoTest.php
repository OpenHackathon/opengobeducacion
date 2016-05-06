<?php

class EstablecimientoTest extends WebTestCase
{
	public $fixtures=array(
		'establecimientos'=>'Establecimiento',
	);

	public function testShow()
	{
		$this->open('?r=establecimiento/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=establecimiento/create');
	}

	public function testUpdate()
	{
		$this->open('?r=establecimiento/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=establecimiento/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=establecimiento/index');
	}

	public function testAdmin()
	{
		$this->open('?r=establecimiento/admin');
	}
}
