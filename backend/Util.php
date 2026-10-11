<?php
 
    class Util {

        function isAlpha($n) {
            $n = strtoupper($n);

                $retorno = true;

                $alfabeto = [
                    'A', 'B', 'C', 'D', 'E', 'F', 'G',
                    'H', 'I', 'J', 'K', 'L', 'M', 'N',
                    'O', 'P', 'Q', 'R', 'S', 'T', 'U',
                    'V', 'W', 'X', 'Y', 'Z'
                ];

                for ($i = 0; $i < strlen($n); $i++) {

                    $encontrou = false;

                    for ($j = 0; $j < count($alfabeto); $j++) {

                        if ($n[$i] === $alfabeto[$j]) {
                            $encontrou = true;
                            break;
                        }
                    }

                    if (!$encontrou) {
                        $retorno = false;
                        break;
                    }
                }

            return $retorno;
                
        }



        function isNum($n){

            $retorno = true;

            $numeros = [
                '0','1', '2', '3', '4', 
                '5','6', '7', '8', '9'
            ];

            for($i = 0;$i < strlen($n);$i++){

                $encontrou = false;

                for($j = 0;$j < count($numeros);$j++){

                    if($n[$i] === $numeros[$j]){
                        $encontrou = true;
                        break;
                    }
                }

                if (!$encontrou) {
                    $retorno = false;
                    break;
                }
            }
            
            return $retorno;
        }


        function formataP($n){
            $n = trim($n,' ');

            $retorno = '';

            for($i = 0; $i < strlen($n);$i++){
                if($i === 0){
                    $retorno .= strtoupper($n[$i]);
                }else{
                    $retorno .= strtolower($n[$i]);
                }
            }

            return $retorno;
        }

        

    }