<?php
session_start();  //memulai sesi

$user = [
    'admin1' => 'password123',
    'user1' => 'password321'
];
if (isset($_POST['submit_login'])){
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    if (isset($user[$username]) && $user[$username]===$password){
        $_SESSION['username'] = $username;
        header ('Location: dashboard.php');
        exit();
    }else{
        $err = "Password atau username salah";
        $err;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($err)): ?>
    <p style="color: red; margin-bottom: 16px;"> <?php echo $err; ?> </p>
    <?php endif; ?>
    <form method="POST">
        <div style="margin-bottom: 16px;">
            <label style="margin-bottom: 8px; display: block;">Username</label>
            <input type="text" name="txt_username" placeholder="Masukkan username">
        </div>
        <div style="margin-bottom: 16px;">
            <label style="margin-bottom: 8px; display: block;">Password</label>
            <input type="password" name="txt_password" placeholder="Masukkan password">
        </div>
        <div>
            <button type="submit" name="submit_login">Submit</button>
        </div>
    </form>
</body>
</html>