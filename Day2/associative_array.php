<?php
$array = ['T-Shirts' => 20, 'Caps' => 10, 'Shoes' => 5];
echo '<p>Caps ' . $array['Caps'] . '</p>';

$array['Caps'] += 5;
$array['Shoes'] += 20;
echo '<p>Shoes ' . $array['Shoes'] . '</p>';
