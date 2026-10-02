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

    <?php if (session()->getFlashdata('success')): ?>
        <div class="message success">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="message error">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <div class="page-heading">
        <h2>All Tasks ♡</h2>

        <?php if (session()->get('logged_in')): ?>
            <a href="<?= base_url('/tasks/new') ?>" class="button-link">
                + New Task
            </a>
        <?php endif; ?>
    </div>

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

                <?php if (session()->get('logged_in')): ?>
                    <div class="task-actions">
                        <a
                            href="<?= base_url('/tasks/edit/' . $task['id']) ?>"
                            class="button-link small"
                        >
                            Edit
                        </a>

                        <form
                            action="<?= base_url('/tasks/archive/' . $task['id']) ?>"
                            method="post"
                        >
                            <button type="submit" class="danger-button small">
                                Archive
                            </button>
                        </form>
                    </div>
                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="empty">
            No tasks available ♡
        </div>

    <?php endif; ?>

    <footer>
        Tasks for Today Management System ♡
    </footer>

</div>

</body>
</html>