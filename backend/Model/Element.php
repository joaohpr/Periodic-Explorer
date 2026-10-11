
<?php

class Element
{

    private $name;
    private $symbol;
    private $atomicNumber;
    private $atomicMass;
    private $group;
    private $period;
    private $block;
    private $electronConfiguration;

    public function __construct($name, $symbol, $atomicNumber, $atomicMass, $group, $period, $block, $electronConfiguration){

        $this->name = $name;

        $this->symbol = $symbol;

        $this->atomicNumber = $atomicNumber;

        $this->atomicMass = $atomicMass;

        $this->group = $group;

        $this->period = $period;

        $this->block = $block;

        $this->electronConfiguration = $electronConfiguration;
    }

    // Getters

    public function getName(){
        return $this->name;
    }

    public function getSymbol(){
        return $this->symbol;
    }

    public function getAtomicNumber(){
        return $this->atomicNumber;
    }

    public function getAtomicMass(){
        return $this->atomicMass;
    }

    public function getGroup(){
        return $this->group;
    }

    public function getPeriod(){
        return $this->period;
    }

    public function getBlock(){
        return $this->block;
    }

    public function getElectronConfiguration(){
        return $this->electronConfiguration;
    }
}
