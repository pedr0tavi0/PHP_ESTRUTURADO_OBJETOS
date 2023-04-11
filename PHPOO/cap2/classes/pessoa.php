<?php 
 class Pessoa
{ 
	private $nome; 
	private $sobrenome; 
	private $cpf;
	private $idade;
	

	public function __construct($nome, $sobrenome, $cpf, $idade ) 
    { 
        if (is_string($nome)) { 
            $this->nome = $nome; 
        } 
		if (is_string($sobrenome)) { 
            $this->sobrenome = $sobrenome; 
        } 
		if (is_numeric($cpf)) { 
            $this->cpf = $cpf; 
        } 
		if (is_numeric($idade)) { 
            $this->idade = $idade; 
        } 
    } 
			public function getNome() 
			{ 
				return $this->nome; 
			} 
			public function getSobrenome() 
			{ 
				return $this->sobrenome; 
			} 
			public function getCpf() 
			{ 
				return $this->cpf; 
			} 
			public function getIdade() 
			{ 
				return $this->idade; 
			} 
}

$p1 = new Pessoa('Pedro', 'Otavio', 51801168805, 20); 
$p2 = new Pessoa('Thiago', 'Barros', 51801168810, 34); 
$p3 = new Pessoa('Mariana', 'Ferreira', 551801158805, 20); 
$p4 = new Pessoa('Guilherme', 'Afonso', 51801120805, 20); 
$p5 = new Pessoa('Victor', 'Fellizzati', 51830168805, 60); 

print 'Nome: '. $p1->getNome() . '<br>'.PHP_EOL; 
print 'Sobrenome: '  . $p1->getSobrenome() . '<br>'.PHP_EOL; 
print 'CPF: '    . $p1->getCpf() . '<br>'.PHP_EOL;
print 'Idade: '    . $p1->getIdade() . '<br>'.PHP_EOL;

print 'Nome: '. $p2->getNome() . '<br>'.PHP_EOL; 
print 'Sobrenome: '  . $p2->getSobrenome() . '<br>'.PHP_EOL; 
print 'CPF: '    . $p2->getCpf() . '<br>'.PHP_EOL;
print 'Idade: '    . $p2->getIdade() . '<br>'.PHP_EOL;

print 'Nome: '. $p3->getNome() . '<br>'.PHP_EOL; 
print 'Sobrenome: '  . $p3->getSobrenome() . '<br>'.PHP_EOL; 
print 'CPF: '    . $p3->getCpf() . '<br>'.PHP_EOL;
print 'Idade: '    . $p3->getIdade() . '<br>'.PHP_EOL;

print 'Nome: '. $p4->getNome() . '<br>'.PHP_EOL; 
print 'Sobrenome: '  . $p4->getSobrenome() . '<br>'.PHP_EOL; 
print 'CPF: '    . $p4->getCpf() . '<br>'.PHP_EOL;
print 'Idade: '    . $p4->getIdade() . '<br>'.PHP_EOL;

print 'Nome: '. $p5->getNome() . '<br>'.PHP_EOL; 
print 'Sobrenome: '  . $p5->getSobrenome() . '<br>'.PHP_EOL; 
print 'CPF: '    . $p5->getCpf() . '<br>'.PHP_EOL;
print 'Idade: '    . $p5->getIdade() . '<br>'.PHP_EOL;
