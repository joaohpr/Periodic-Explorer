<?php

require_once __DIR__ . '/../Model/Element.php';

class ElementRepository{
    private $url;

    public function __construct(){
        $this->url = 'https://api.periodictableofelements.org/elements/';
    }

    public function findAll(){
        $json = @file_get_contents($this->url);

        if ($json === false) {
            throw new RuntimeException('Não foi possível acessar a API.');
        }

        $data = json_decode($json, true);

        if (!is_array($data) || json_last_error() !== JSON_ERROR_NONE) {
            throw new RuntimeException('A API retornou dados inválidos.');
        }

        $elements = [];

        foreach ($data as $elementData) {
            $element = new Element(
                $elementData['name'],
                $elementData['symbol'],
                $elementData['atomic_number'],
                $elementData['atomic_mass'],
                $elementData['group_number'],
                $elementData['period'],
                $elementData['block'],
                $elementData['electron_configuration_semantic']
            );

            $elements[] = $element;
        }

        return $elements;
    }
}
