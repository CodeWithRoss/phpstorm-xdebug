<?php

// Variables with numbers
$age   = rand(13, 25);
$qty   = rand(1, 5);
$price = 19.99;

if ($age < 21) {
    echo "You are NOT eligible to buy this product.<br/>";
} else {
    echo "You are eligible to buy this product.<br/>";

    // Adding 20% tax
    $unit_cost = round($price * 1.20, 2);
    $total     = round($unit_cost * $qty, 2);

    $user = array(
        'qty'       => $qty,
        'unit_cost' => $unit_cost,
        'total'     => $total
    );

    print_r($user);
}
