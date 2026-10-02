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
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('/tasks') ?>">Task List</a>
    <a href="<?= base_url('/profile') ?>">Profile</a>
    <a href="<?= base_url('/about') ?>">About</a>

    <?php if (session()->get('logged_in')): ?>
        <a href="<?= base_url('/logout') ?>">Logout</a>
    <?php else: ?>
        <a href="<?= base_url('/login') ?>">Login</a>
    <?php endif; ?>
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