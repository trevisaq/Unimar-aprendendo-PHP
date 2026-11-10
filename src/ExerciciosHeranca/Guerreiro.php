<?php 

namespace App;

class Guerreiro extends Personagem
{
    public function atacar(): string 
    {
        if(!$this->gastarEnergia(20)){
            return $this->getNome() . ' está sem energia para atacar'; 
        }

        return $this->getNome() . " atacou com a espada! [{$this->getEnergia()} de energia sobrando]";
    }
}