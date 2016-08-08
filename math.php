<?php
class Math
{
    const ADD = 'ADD';
    const SUBTRACT = 'SUBTRACT';
    const DIVIDE = 'DIVIDE';
    const MULTIPLY = 'MULTIPLY';

    function add($x, $y){
        return $this->doOperation($this::ADD,func_get_args());
    }
    
    function subtract($x, $y) {
        return $this->doOperation($this::SUBTRACT,func_get_args());
    }
    
    function multiply($x, $y) {
        return $this->doOperation($this::MULTIPLY,func_get_args());
    }
    function divide($x, $y) {
        return $this->doOperation($this::DIVIDE,func_get_args());
    }
    private function doOperation($operation, $args) {
        if($operation == $this::ADD) {
            $result = $args[0];
            for($i = 1; $i < count($args); $i++){
                $result += $args[$i];
            }
            return $result;
        }
        if($operation == $this::SUBTRACT) {
            $result = $args[0];
            for($i = 1; $i < count($args); $i++){
                $result -= $args[$i];
            }
            return $result;
        }
        if($operation == $this::DIVIDE) {
            $result = $args[0];
            for($i = 1; $i < count($args); $i++){
                $result /= $args[$i];
            }
            return $result;
        }
        if($operation == $this::MULTIPLY) {
            $result = $args[0];
            for($i = 1; $i < count($args); $i++){
                $result *= $args[$i];
            }
            return $result;
        }
    }
}


?>