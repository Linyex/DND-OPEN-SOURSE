<?php
require_once __DIR__ . '/../../engine/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/../../views/model view/header.php'?>
<?php include_once __DIR__ . '/components/stylerigister.php'?>
<body>
<form class="card" action="src/actions/register.php" method="post" enctype="multipart/form-data">
    <h2>Регистрация</h2>

    <label for="name">
        Имя аккаунта
        <input type="text" id="name" name="name" value="<?php echo old('name') ?>"
            <?php echo validationErrorAttr('name'); ?>
        >
        <?php if(hasValidationError('name')): ?>
            <small><?php echo validationErrorMessage('name'); ?></small>
        <?php endif; ?>
    </label>

    <label for="email">
        E-mail
        <input type="text" id="email" name="email" value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>>
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>

    <label for="avatar">Изображение профиля
        <input type="file" id="avatar" name="avatar"
            <?php echo validationErrorAttr('avatar'); ?>>
        <?php if(hasValidationError('avatar')): ?>
            <small><?php echo validationErrorMessage('avatar'); ?></small>
        <?php endif; ?>
    </label>

    <div class="grid">
        <label for="password">
            Пароль
            <input type="password" id="password" name="password"
                <?php echo validationErrorAttr('password'); ?>>
            <?php if(hasValidationError('password')): ?>
                <small><?php echo validationErrorMessage('password'); ?></small>
            <?php endif; ?>
        </label>

        <label for="password_confirmation">
            Подтверждение
            <input type="password" id="password_confirmation" name="password_confirmation">
        </label>
    </div>

    <fieldset>
        <label for="terms">
            <input title="Защита данных вашего аккаунта не совершенна, поэтому мы не может с уверенностью сказать что ваш аккаунт не взломают!" type="checkbox" id="terms" name="terms">
            Я принимаю все условия пользования
        </label>
    </fieldset>

    <button type="submit" id="submit" disabled>Продолжить</button>
</form>

<p>У меня уже есть <a href="/views/account/autorization.php">аккаунт</a></p>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>