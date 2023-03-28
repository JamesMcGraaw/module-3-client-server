<?php

session_start();

// session_start() first checks if a session is already started and if
// not then it starts one

// We need session_start() before we can access $_SESSION

// It must be the very first thing in your script. Even before any HTML tags.

$_SESSION['username'] = 'fred1234'; // Creates new session variable.

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<a href="sesspage2.php">'
    . '<button type="button">Next Page</button>'
    . '</a>';

