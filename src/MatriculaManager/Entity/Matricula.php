<?php

namespace MatriculaManager/Entity;

class Matricula {
  
  public function getEscola() {
    return $this->escola;
  }
  
  public function setEscola(Escola $escola) {
    $this->escola = $escola;
  }
  
  public function getAluno() {
    return $this->aluno;
  }
  
  public function setAluno(Aluno $aluno) {
    $this->aluno = $aluno;
  }
  
  public function getTurno() {
    return $this->turno;
  }
  
  public function setTurno(Turno $turno) {
    $this->turno = $turno;
  }
  
}
