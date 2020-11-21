<?php
/**
 * Calc File.
 * PHP version 5
 * 
 * @category Components
 * @package  PHP
 * @author   Md Ismail <mi0718839@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  SVN: $Id$
 * @link     https://yoursite.com
 */ 

 $operator = $_POST['operator'];
 $operand1 = $_POST['operand1'];
 $operand2 = $_POST['operand2'];
if ($operator == '+') {
    $result = $operand1 + $operand2;
} elseif ($operator == '-') {
    $result = $operand1 - $operand2;
} elseif ($operator == '*') {
    $result = $operand1 * $operand2;
} elseif ($operator == '/') {
    if ($operand1 > $operand2) {
        $result = "";
    } else {
        $result = $operand1 / $operand2;
    }
} elseif ($operator == '=') {
    $result = $operand2; 
}

echo $result;
?>
