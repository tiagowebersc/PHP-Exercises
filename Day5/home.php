<?php

if (isset($_POST['signIn'])) {
    $access = ['mail' => 'dddd'];
    $mail = $_POST['email'];
    $password = $_POST['password'];

    if (empty($mail) || empty($password)) {
        echo '<h1 style=\'color:red;\'> Email and password must be informed!!! </h1>';
        die();
    }

    // read file
    $fileHandle = fopen('users.txt', 'r');
    while (!feof($fileHandle)) {
        $lineItens = explode(';', fgets($fileHandle));
        $accessItem = [];
        $accessItem[explode('=', $lineItens[0])[0]] = trim(explode('=', $lineItens[0])[1]);
        $accessItem[explode('=', $lineItens[1])[0]] = trim(explode('=', $lineItens[1])[1]);
        $access[count($access)] = $accessItem;
    }
    fclose($fileHandle);

    $hasAccess = false;
    foreach ($access as $value) {
        if ($mail === $value['mail'] && $password === $value['password']) {
            $hasAccess = true;
            break;
        }
    }

    if ($hasAccess) {
        echo '<h1 style=\'color:green;\'> Access granted </h1>';
    } else {
        echo '<h1 style=\'color:red;\'> Access denied </h1>';
    }
}
