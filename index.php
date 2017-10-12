<?php

$watIs = array('hallo', true, 5.1, 5, ['mars', 'jupiter']);

foreach ($watIs as $value) {
	echo 'De waarde is ';
    echo gettype($value), PHP_EOL;
}