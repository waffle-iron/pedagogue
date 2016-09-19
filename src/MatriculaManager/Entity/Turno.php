<?php

namespace MatriculaManager\Entity;

class Turno {

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getHoraInicio() {
    return $this->horaInicio;
  }

  public function setHoraInicio($horaInicio) {
    $this->horaInicio = $horaInicio;
  }

  public function getHoraFim() {
    return $this->horaFim;
  }

  public function setHoraFim($horaFim) {
    $this->horaFim = $horaFim;
  }

}
