<?php
class sala_virtual{
    private $nome;
    private $disciplina;
    private $quantidade;



    public function __construct($nome,$disciplina,$quantidade){
        $this->pessoa[];
        if (is_string($nome)) { 
            $this->nome = $nome;
        } 
            if (is_string($disciplina)) { 
                $this->disciplina = $disciplina;

            }
            if (is_numeric($quantidade)) { 
                $this->quantidade = $quantidade; 
            }

    }


    public function getNome() 
			{ 
				return $this->nome; 
			} 
    public function getDisciplina() 
			{ 
				return $this->disciplina; 
			} 
        public function getQuantidade() 
			{ 
				return $this->quantidade; 
                
			} 
            public function addPessoas($nome,$sobrenome,$cpf,$idade)
            {
             this->pessoas[] = new Pessoa($nome,$sobrenome,$cpf,$idade)

            }
}

$s1 = new sala_virtual('Diagramas uml','Engenharia de Software',20); 
$s2 = new sala_virtual('Fundamentos php','Desenvolvimento Web 2',15);

print 'Nome: '. $s1->getNome() . '<br>'.PHP_EOL;
print 'Discipina: '. $s1->getDisciplina() . '<br>'.PHP_EOL;
print 'Quantidade: '. $s1->getQuantidade() . '<br>'.PHP_EOL; 

print 'Nome: '. $s2->getNome() . '<br>'.PHP_EOL;
print 'Discipina: '. $s2->getDisciplina() . '<br>'.PHP_EOL;
print 'Quantidade: '. $s2->getQuantidade() . '<br>'.PHP_EOL; 





?>
