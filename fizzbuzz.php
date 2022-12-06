<?php

$num = rand(1, 100);

if($num % 3 == 0 && $num % 5 == 0) {
    echo 'fizz buzz';
}else if($num % 3 == 0) {
    echo 'fizz';
}else if($num % 5 == 0) {
    echo 'buzz';
}else {
    echo "$num";
}
