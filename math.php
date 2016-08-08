<?php
class Math
{
    
    function __construct()
    {
    }
    function add($x, $y){
        $numargs = func_num_args();
        if($numargs > 2) {
            $result = $x + $y;
            for($i = 2; $i <= $numargs -1; $i++){
                $result += func_get_arg($i);
            }
            return $result;
        } else {
            return $x + $y;
        }
    }
    
    function subtract($x, $y) {
        $numargs = func_num_args();
        if($numargs > 2) {
            $result = $x - $y;
            for($i = 2; $i <= $numargs - 1; $i++){
                $result -= func_get_arg($i);
            }
            return $result;
        } else {
            return $x - $y;
        }
    }
    
    function multiply($x, $y) {
        $numargs = func_num_args();
        if($numargs > 2) {
            $result = $x * $y;
            for($i = 2; $i <= $numargs - 1; $i++){
                $result *= func_get_arg($i);
            }
            return $result;
        } else {
            return $x * $y;
        }
    }
    function divide($x, $y) {
        $numargs = func_num_args();
        if($numargs > 2) {
            $result = $x / $y;
            for($i = 2; $i <= $numargs - 1; $i++){
                $result /= func_get_arg($i);
            }
            return $result;
        } else {
            return $x / $y;
        }
    }
}

?>