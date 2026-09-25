<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<div class="container">

    <h1>Task List</h1>

    <div class="bow">୨୧ ♡ ୨୧</div>

    <nav>
        <a href="/">Home</a>
        <a href="/tasks">Task List</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </nav>

    <h2>All Tasks ♡</h2>

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

    <footer>
          Tasks for Today Management System ♡
    </footer>

</div>

</body>
</html>