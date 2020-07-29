<?php 

class Persona{
    
    private $nome = "";
    private $cognome = "";
    private $email = "";
    private $cf = "";

    public function __construct($nome, $cognome, $email, $cf) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->cf = $cf;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getCognome() {
        return $this->cognome;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getCf() {
        return $this->cf;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setCf($cf) {
        $this->email = $cf;
    }
    
}

