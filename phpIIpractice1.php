<?php

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];
echo "Total price: $" . calculateTotalPrice($items);

function modifyString(string $input): string {
    $input = str_replace(' ', '', $input);
    return strtolower($input);
}

$string = "This is a poorly written program with little structure and readability.";
echo "\nModified string: " . modifyString($string);

function isEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

$number = 42;
echo "\n" . isEvenOrOdd($number);

?>
