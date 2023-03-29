<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!isset($_POST['fname']) || $_POST['fname'] == ''|| $_POST['fname'] == ' ') {
        echo 'Name is empty. ';
    } else {
        echo 'Hello ' . strtolower($_POST['fname']) . '. ';
    }
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!isset($_POST['age']) && $_POST['age'] != null && !is_string($_POST['age'])) {
        echo 'No age given. ';
    } else {
        echo ' I see you are ' . strtolower($_POST['age']) . '. ';
    }
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!isset($_POST['favCol']) || $_POST['favCol'] == '' || $_POST['favCol'] == ' ') {
        echo 'Why no fave colour. ';
    } else {
        echo 'Your favourite colour is ' . strtolower($_POST['favCol']) . '?! What kind of favourite colour is that?!';
    }
}