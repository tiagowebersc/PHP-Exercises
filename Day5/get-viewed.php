<?php

session_start();

if (isset($_SESSION['viewed']))
    echo 'You have visited the page create-session';
else
    echo 'You have not visited the create-session page';
