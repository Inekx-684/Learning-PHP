<?php 
$michisFelinos  = true;# cats are felines
$michis4Patas = true;#cats have four legs
$michisVuelan = false;#cats fly
$michisCode = false;#cats code.

var_dump($michisFelinos && $michisVuelan);#false, cats are felines but don´t fly.
var_dump($michisFelinos || $michisVuelan)#true cats are felines OR fly (they do'nt fly but are felines).




?>