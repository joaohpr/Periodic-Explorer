
<?php

require_once __DIR__ . '/../Repository/ElementRepository.php';
require_once __DIR__ . '/../Util.php';

class ElementService{
    private $util;
    private $repository;

    public function __construct(){
        $this->util = new Util();
        $this->repository = new ElementRepository();
    }

    public function findElement($elementRepresentation){
        $n = trim($elementRepresentation);
        $n = $this->util->formataP($n);

        $isAlfa = $this->util->isAlpha($n);
        $isNum = $this->util->isNum($n);
        $elementNum = (int) $n;
        $size = strlen($n);

        // busca os elementos apenas uma vez
        $elements = $this->repository->findAll();

        // busca pelo nome
        if ($isAlfa === true && $size > 2) {

            foreach ($elements as $element) {
                if ($element->getName() === $n) {
                    return $element;
                }
            }

       //busca pela sigla
        } elseif ($isAlfa === true && $size > 0 && $size <= 2) {

            foreach ($elements as $element) {
                if ($element->getSymbol() === $n) {
                    return $element;
                }
            }

        // pesquisa pelo numero atomico
        } elseif (
            $isNum === true &&
            $elementNum >= 1 &&
            $elementNum <= 118
        ) {

            foreach ($elements as $element) {
                if ($element->getAtomicNumber() === $elementNum) {
                    return $element;
                }
            }
        }

        // caso n encontre nenhum elemento ou o formato esteja errado
        return null;
    }
}
