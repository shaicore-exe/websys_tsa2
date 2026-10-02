<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<div class="container">

    <h1>About</h1>

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

    <div class="about-card">

        <h2>Shai's Tasks for Today Management System ♡</h2>

        <p>
            Task management system
            built with CodeIgniter 4
        </p>

        <p>
            IT0049 — Web System Technologies
        </p>

        <div class="bow">୨୧ ♡ ୨୧</div>

    </div>

    <footer>
          Tasks for Today Management System ♡
    </footer>

</div>

</body>
</html>