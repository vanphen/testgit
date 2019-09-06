<?php 

class Fraction{

	public $tu;
	public $mau;

	public function setFraction($_tu,$_mau){
		if($_mau == 0){
			echo 'mau khong the la 0';
			return 0;
		}else{
			$this->tu = $_tu;
			$this->mau = $_mau;
		}
	}


	public function getFraction(){
		echo $this->tu/$this->mau;
	}

	public function plusFraction($_tu,$_mau){
			return ($this->tu *$_mau + $_tu * $this->mau).'/'.($this->mau * $_mau).'<br>';


	}
	public function minusFraction($_tu,$_mau){
	 		return ($this->tu *$_mau - $_tu * $this->mau).'/'.($this->mau * $_mau).'<br>';


	}

	public function multiplyFraction($_tu,$_mau){
		if($_mau == 0){
			echo 'mau khong the la 0';
			return ;

		}else if($_tu ==0){

			return 0;


		}else{
			return  ($this->tu * $_tu).'/'.($this->mau *  $_mau).'<br>';
		}
		
	}

	public function divỉFraction($_tu,$_mau){
		if($_mau == 0 || $_tu == 0){
			return ;
		}else{
			return  ($this->tu * $_mau).'/'.($this->mau * $_tu).'<br>';
		}
	}



}

$phanso = new Fraction();

$phanso->setFraction(1,2);

echo 'cong 2 phan so = '.$phanso->plusFraction(3,2);

echo 'tru 2 phan so ='.$phanso->minusFraction(1,4);

echo 'nhan 2 phan so = '.$phanso->multiplyFraction(0,3);
echo '<br>';

echo 'chia 2 phan so = '.$phanso->divỉFraction(0,2);



 ?>