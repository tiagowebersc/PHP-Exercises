<?php
// For loop
// Display all the numbers from 0 to 10
for ($i = 0; $i <= 10; $i++) {
    echo $i . '  ';
}
echo '<hr>';
//Loop throught an array
$fruits = ['Apple', 'Coconut', 'Lemon'];
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}
echo '<hr>';

// While loop
// Display all the numbers from 0 to 10
$i = 0;
while ($i <= 10) {
    echo $i . '  ';
    $i++;
}
echo '<hr>';
$i = 0;
while (true) {
    echo $i . '  ';
    if ($i == 10) break;
    $i++;
}
echo '<hr>';
// Do While loop
$i = 11;
do {
    echo $i . '  ';
    $i++;
} while ($i <= 10);
echo '<hr>';
// Foreach
$fruits = ['Apple', 'Coconut', 'Lemon'];
foreach ($fruits as $idx => $fruit) {
    echo $idx . ' - ' . $fruit . '<br>';
}

$countries = [
    'Luxembourg' => 600000,
    'France' => 1700000
];
foreach ($countries as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
}
echo '<hr>';
