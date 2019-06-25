<?php
/* Test something
if ($condition) {
    echo 'It\'s true';
    echo 'blablabla';
} else {
    echo 'It\'s false';
}
*/

$test = true;
if ($test == true)
    echo 'It is true';
else
    echo 'It is false';
?>

<div>
    <?php if ($test) : ?>
        <p>It is true</p>
    <?php endif; ?>
</div>

<?php
$x = 10;
$y = 5;
if ($x == $y)
    echo 'Two values are the same<br>';
else if ($x > $y)
    echo 'X value is bigger<br>';
else
    echo 'Y value is bigger<br>';

if ($x >= $y)
    echo 'X is greater or equal than Y<br>';

if ($x != $y)
    echo 'Both values are differents<br>';

$results = ($x == $y) ? 'Its true' : 'Its not true';
echo $results . '<br>';

if ($x % 2 == 0)
    echo 'X is a even number';
