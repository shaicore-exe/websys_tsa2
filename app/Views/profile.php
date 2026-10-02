<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<div class="container">

    <h1>Profile</h1>

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

    <div class="profile-card">

        <h2><?= esc($user['full_name']) ?> ♡</h2>

        <p>
            <strong>Username:</strong><br>
            <?= esc($user['username']) ?>
        </p>

        <p>
            <strong>Email:</strong><br>
            <?= esc($user['email']) ?>
        </p>

    </div>

    <footer>
        Tasks for Today Management System ♡
    </footer>

</div>

</body>
</html>