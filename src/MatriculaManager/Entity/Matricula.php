<?php

namespace MatriculaManager\Entity;


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

  public function getSerie() {
    return $this->serie;
  }

  public function setSerie(Série $serie) {
    $this->serie = $serie;
  }
  
  public function getTurma() {
    return $this->turma;
  }

  public function setTurma(Turma $turma) {
    $this->turma = $turma;
  }

  public function getStatus(){
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

}
