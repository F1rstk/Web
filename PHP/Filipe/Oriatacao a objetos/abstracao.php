<?php
//modelo
class Personagem{
    
    //atribuidos
    public $nome = null;
    public $poder = null;
    public $fraquezas = null;

    //métodos
    function resumir(){
        return "$this->nome possui o poder de $this->poder e sua fraqueza é $this->fraquezas";

    }

    function mod($nome,$poder,$fraquezas){
        $this->nome=$nome;
        $this->poder=$poder;
        $this->fraquezas=$fraquezas;
    }
}
$func1 = new Personagem;
echo $func1->mod("Homem-Aranha","soltar teia","sempre apanha");
echo $func1->resumir();
?>