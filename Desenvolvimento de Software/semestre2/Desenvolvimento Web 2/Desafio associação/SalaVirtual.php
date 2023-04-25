<?php

class SalaVirtual {
    protected $nome;
    protected $idSala;
    protected $professor;

    public function __construct ($nome, $idSala, $professor) {
        $this->nome = $nome;
        $this->idSala = $idSala;
        $this->professor = $professor;
    }

    public function informarSala() { 
        return "Esta sala é a {$this->nome}, e seu id é: {$this->idSala}";
    }

    public function infoProfessor() { 
        return "O professor é: {$this->professor}";
    }
}

    $s3 = new SalaVirtual ('ti', 21, 'fessor'); 

    $s2 = new SalaVirtual ('ge', 22, 'fessora'); 

