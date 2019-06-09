<?php

// namespace second;

include 'fns.php';
include 'sns.php';

use second\A as NewA;

# $obj = new second\A; // -> qualified class name
# $obj = new A; // I am at global space - SNS  : Display because it is in the same namespace -> unqualified class name
$obj = new NewA;
echo $obj->__construct(); // I am at global space - SNS

$obj = new A;
echo $obj->__construct(); // I am at global space - FNS -> Fully qualified class name