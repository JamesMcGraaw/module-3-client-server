<?php

if (isset($_COOKIE['count'])) {
    $visits = $_COOKIE['count'] + 1;
} else {
    $visits = 1;
}

setcookie('count', $visits);

echo '<p>You have been here ' . $visits . ' times before.</p>';