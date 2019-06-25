<?php
$bool1 = true;
$bool2 = false;

// possible to use && and AND
if ($bool1 && $bool2)
    echo 'This is true!<br>';

// possible to use || and OR
if ($bool1 || $bool2)
    echo 'This is true!<br>';

// XOR - only one true
if ($bool1 xor $bool2)
    echo 'This is true!<br>';

// NOT
if (!$bool1)
    echo 'This is true!<br>';
