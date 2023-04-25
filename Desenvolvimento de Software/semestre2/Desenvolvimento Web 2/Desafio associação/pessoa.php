<?php

class Pessoa {
    private $nome;
    private $ra;
    private $semestre;
    private $curso;
    private $sala;

    public function __construct($nome, $ra, $semestre, $curso, $sala) {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->semestre = $semestre;
        $this->curso = $curso;
        $this->sala = $sala;
    }

    public function irAula() {
        echo "{$this->nome} está na sala do curso {$this->curso}, {$this->sala->informarSala()}.\n";
    }
}
