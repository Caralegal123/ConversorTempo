<?php

class Tempo
{
    private $segundos;
    private $total;

    // Construtor

    function __construct()
    {
        $this->segundos = 0;
        $this->total = 0;
    }

    // Getters e Setters

    public function setTempo($tempo)
    {
        $this->segundos = $tempo;
    }

    public function getTotal()
    {
        return $this->total;
    }
    
    // Métodos

    public function minutos()
    {
        $this->total = $this->segundos / 60;
    }

    public function horas()
    {
        $this->total = $this->segundos / 60 / 60;
    }

    public function dias()
    {
        $this->total = $this->segundos / 60 / 60 / 24;
    }
    
    public function semanas()
    {
        $this->total = $this->segundos / 60 / 60 / 24 / 7;
    }
}