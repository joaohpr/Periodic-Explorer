<?php 

    class Element { 

        private $name;
        private $number;
        private $symbol;
        private $atomicNumber;
        private $atomicMass;
        private $groupBlock;
        private $electronConfiguration;


        //Getters 

        function getName(){
            return $this->name;
        }

        function getNumber(){
            return $this->number;
        }

        function getSymbol(){
            return $this->symbol;
        }

        function getAtomicNumber(){
            return $this->atomicNumber;
        }

        function getAtomicMass(){
            return $this->atomicMass;
        }

        function getGroupBlock(){
            return $this->groupBlock;
        }

        function getElectronConfiguration(){
            return $this->electronConfiguration;
        }


        //Setters

        function setName($name){
            $this->name = $name;
        }

        function setNumber($number){
            $this->number = $number;
        }

        function setSymbol($symbol){
            $this->symbol = $symbol;
        }

        function setAtomicNumber($atomicNumber){
            $this->atomicNumber = $atomicNumber;
        }

        function setAtomicMass($atomicMass){
            $this->atomicMass = $atomicMass;
        }

        function setGroupBlock($groupBlock){
            $this->groupBlock = $groupBlock;
        }

        function setElectronConfiguration($electronConfiguration){
            $this->electronConfiguration = $electronConfiguration;
        }

        

    }
