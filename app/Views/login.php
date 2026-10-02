<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<div class="container">

    <h1>Login ♡</h1>

    <div class="bow">୨୧ ♡ ୨୧</div>

    <?php if (session()->getFlashdata('error')):?>
        <div class="message error">
            <?= esc(session()->getFlashdata('error'))?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')):?>
        <div class="message success">
            <?= esc(session()->getFlashdata('success'))?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/login') ?>" method="post" class="form-card">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    
        <button type="submit">Log In</button>
    </form>

    <p class="center-text">
        <a href="<?= base_url('/') ?>">Back to Home</a>
    </p>

</div> 

</body>
</html>

