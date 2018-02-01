
<?php	

class Carro{
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;	
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;	
	}
	public function getMotor(){
		return $this->motor;	
	}
	public function setMotor($motor){
		$this->motor = $motor;	
	}
	public function getAno():int{
		return $this->ano;	
	}
	public function setAno($ano){
		$this->ano = $ano;	
	}
	public function exibir(){
		return array('Modelo' => $this->getModelo(),
					'Ano'     => $this->getAno(),
					'Motor'   => $this->getMotor() );
		
	}
}

$focus = new Carro();
$focus->setModelo("Focus");
$focus->setAno(2015);
$focus->setMotor("16v");
var_dump($focus->exibir());
?>