<?php

require_once __DIR__ . '/../../../../engine/helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setOldValue('email', $email);
    setValidationError('email', 'Неверный формат электронной почты');
    redirect('/views/account/autorization.php');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Пользователь $email не найден");
    redirect('/views/account/autorization.php');
}

if (!password_verify($password, $user['password'])) {
    setMessage('error', 'Неверный пароль');
    redirect('/views/account/autorization.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/views/account/home.php');