<?php
require_once __DIR__ . '/../../engine/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/../../views/model view/header.php'?>
<?php include_once __DIR__ . '/components/styleautoriz.php'?>
<body>

<form class="card" action="src/actions/login.php" method="post">
    <h2>Вход</h2>

    <?php if(hasMessage('error')): ?>
        <div class="notice error"><?php echo getMessage('error') ?></div>
    <?php endif; ?>

    <label for="email">
        Имя
        <input type="text" id="email" name="email" value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>

    <label for="password">
        Пароль
        <input type="password" id="password" name="password">
    </label>

    <button type="submit" id="submit"
    >Продолжить</button>
</form>

<p>У меня еще нет <a href="/views/account/register.php">аккаунта</a></p>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>