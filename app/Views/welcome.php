<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<div class="container">

    <h1>Tasks for Today</h1>

    <div class="bow">୨୧ ♡ ୨୧</div>

    <nav>
        <a href="/">Home</a>
        <a href="/tasks">Task List</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </nav>

    <h2>Today's Tasks ♡</h2>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>

            <div class="task-card">

                <h3><?= esc($task['title']) ?></h3>

                <p>
                    <span class="status">
                        <?= esc($task['status']) ?>
                    </span>
                </p>

                <p>♡ <?= esc($task['task_date']) ?></p>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="empty">
            No tasks for today ♡
        </div>

    <?php endif; ?>

    <footer>
          Tasks for Today Management System ♡
    </footer>

</div>

</body>
</html>