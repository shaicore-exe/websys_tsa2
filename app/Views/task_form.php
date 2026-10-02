<!DOCTYPE html>
<html>
<head>
    <title><?= esc($formTitle) ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<div class="container">

    <h1><?= esc($formTitle) ?> ♡</h1>

    <div class="bow">୨୧ ♡ ୨୧</div>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/tasks') ?>">Task List</a>
        <a href="<?= base_url('/profile') ?>">Profile</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/logout') ?>">Logout</a>
    </nav>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="message error">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php
        $isEditing = !empty($task);
        $formAction = $isEditing
            ? base_url('/tasks/update/' . $task['id'])
            : base_url('/tasks/create');
    ?>

    <form action="<?= $formAction ?>" method="post" class="form-card">

        <label for="title">Task Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="<?= esc($task['title'] ?? old('title')) ?>"
            required
        >

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
        </select>

        <label for="task_date">Task Date</label>
        <input
            type="date"
            name="task_date"
            id="task_date"
            value="<?= esc($task['task_date'] ?? old('task_date')) ?>"
            required
        >

        <button type="submit">
            <?= $isEditing ? 'Update Task' : 'Create Task' ?>
        </button>

    </form>

    <p class="center-text">
        <a href="<?= base_url('/tasks') ?>">Cancel</a>
    </p>

</div>

</body>
</html>