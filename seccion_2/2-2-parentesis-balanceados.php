<?php
function parentesisBalanceados(string $s): bool {
    $map = ['(' => ')', '{' => '}', '[' => ']'];
    $stack = [];
    $chars = preg_split('//u', $s, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($chars as $ch) {
        if (isset($map[$ch])) {
            array_push($stack, $ch);
        } elseif (in_array($ch, $map, true)) {
            $last = array_pop($stack);
            if ($last === null || $map[$last] !== $ch) return false;
        }
    }
    return empty($stack);
}
//Prueba
var_dump(parentesisBalanceados("( [ ] )")); // true
var_dump(parentesisBalanceados("([) ]"));   // false