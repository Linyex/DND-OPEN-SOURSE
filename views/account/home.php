<?php
include_once __DIR__ . '/../../views/model view/header.php';
require_once __DIR__ . '/../../engine/helpers.php';

checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<body>

<div class="card home">
    <img
        class="avatar"
        src="<?php echo $user['avatar'] ?>"
        alt="<?php echo $user['name'] ?>"
    >
    <h1>УРА!! наконец-то я эту херню понял благодаря видосу на 1.5 часа <?php echo $user['name'] ?></h1>
    <form action="src/actions/logout.php" method="post">
        <button role="button">Выйти из аккаунта</button>
    </form>
</div>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>