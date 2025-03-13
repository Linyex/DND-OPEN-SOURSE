<?php

require_once __DIR__ . '/../../../../engine/helpers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    logout();
}

redirect('/views/account/home.php');