<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?= $title; ?>
    </title>
</head>

<body>
    <h2>Reset Password</h2>
    <h5>Hello <span><?php echo $nama; ?></span>, Silakan isi password baru anda.</h5>
    <?php echo form_open('lupa_password/reset_password/token/' . $token); ?>
    <p>Password Baru:</p>
    <p>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" />
    </p>
    <p> <?php echo form_error('password'); ?> </p>
    <p>Konfirmasi Password:</p>
    <p>
        <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" />
    </p>
    <p> <?php echo form_error('passconf'); ?> </p>
    <p>
        <input type="submit" name="btnSubmit" value="Reset" />
    </p>
</body>

</html> 