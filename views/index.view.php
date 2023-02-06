<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <?php require_once('partials/nav.php'); ?>

    <h1>My Tasks</h1>

    <ul>
        <?php foreach ( $tasks as $task ): ?>
            <li>

                <?php if ( $task->is_complete ): ?>
                    <strike>
                <?php endif; ?>

                <?= $task->description; ?>

                <?php if ( $task->is_complete ): ?>
                    </strike>
                <?php endif; ?>

            </li>
        <?php endforeach; ?>
    </ul>
    <h2>Sisesta Task</h2>
    <form method="POST" action="/task">
        <input type="text" name="task">
        <input type="submit" value="Salvesta">
    </form>
    <?php require_once('partials/footer.php'); ?>
</body>
</html>