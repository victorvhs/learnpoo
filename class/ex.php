<?php
class Pessoa {

	public $nome; // Atributo

	public function falar()
	{ // metodo publico
		return "O meu nome é ".$this->nome;
	}
	

}

$user = new Pessoa();
$user->nome="Victor";
echo $user->falar();

phpinfo();
?>
