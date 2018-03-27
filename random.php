<?php
$int = random_int(-500, 500);
$bytes = random_bytes(10);
var_dump($int); echo "<br/>";
var_dump(bin2hex($bytes));

/*
int(406)
string(20) "91b7359b5af010bac3b5"
*/