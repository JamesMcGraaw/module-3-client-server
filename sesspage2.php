<?php

session_start();

// Display the username variable stored in the session data by sesspage1.php

echo '<p>Hello, ' . $_SESSION['username'] . '</p>';

echo '<a href="sesspage3.php">'
    . '<button type="button">Log Out</button>'
    . '</a>';