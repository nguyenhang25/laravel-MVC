<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

trait ConNguoi
{
	public $ID;
	public $hoTen;
	public $namSinh;
	public $queQuan;


	public function setID($ID)
	{
		$this->ID = $ID;
	}
	public function getID()
	{
		return $this->ID;
	}
	
	public function setHoTen($hoTen)
	{
		$this->hoTen = $hoTen;
	}
	public function getHoTen()
	{
		return $this->hoTen;
	}

	public function setNamSinh($namSinh)
	{
		$this->namSinh = $namSinh;
	}
	public function getNamsinh()
	{
		return $this->namSinh;
	}

	public function setQueQuan($queQuan)
	{
		$this->queQuan = $queQuan;
	}
	public function getQueQuan()
	{
		return $this->queQuan;
	}


}
?>
