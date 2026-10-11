<?php

    require_once __DIR__ . '/../Service/ElementService.php';

    class ElementController { 

        private $service;

        public function __construct(){
            $this->service = new ElementService();
        }

        public function run(){
            
            $n = $_POST['input'];

            header('Content-Type: application/json; charset=utf-8');

            $element = $this->service->findElement($n);

            if($element === null){
                $resposta = [
                    'success' => false
                ];
                $resposta = json_encode($resposta);
                echo $resposta;

            }else{
                $resposta = [
                    'success' => true,
                    'name' => $element->getName(),
                    'symbol' => $element->getSymbol(),
                    'atomicNumber' => $element->getAtomicNumber(),
                    'atomicMass' => $element->getAtomicMass(),
                    'group' => $element->getGroup(),
                    'period' => $element->getPeriod(),
                    'block' => $element->getBlock(),
                    'electronConfig'=> $element->getElectronConfiguration()
                ];  

                $resposta = json_encode($resposta);
                echo $resposta;
            }

        }

    }


   $controller = new ElementController();
    $controller->run();