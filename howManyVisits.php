<?php

session_start();

if (!isset($_COOKIE['countVisits'])) {
    setcookie('countVisits', 1);
} else {
    setcookie('countVisits', $_COOKIE['countVisits'] + 1);
}

if ($_COOKIE['countVisits'] != 1) {
    echo '<p>You have been here ' . $_COOKIE['countVisits'] . ' times before.</p>';
} else {
    echo '<p>This is your first time here</p>';
}