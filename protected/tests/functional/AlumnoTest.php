<?php

class AlumnoTest extends WebTestCase
{
	public $fixtures=array(
		'alumnos'=>'Alumno',
	);

	public function testShow()
	{
		$this->open('?r=alumno/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=alumno/create');
	}

	public function testUpdate()
	{
		$this->open('?r=alumno/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=alumno/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=alumno/index');
	}

	public function testAdmin()
	{
		$this->open('?r=alumno/admin');
	}
}
