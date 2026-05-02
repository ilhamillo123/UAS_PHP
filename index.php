<?php
session_start();

$error = "";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1233"){
        $_SESSION['login'] = true;
        $_SESSION['user'] = $username;

        header("Location: landing_page.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body{
            font-family: Arial;
            background: #f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .box{
            background:white;
            padding:20px;
            border-radius:10px;
            width:300px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }
        input{
            width:100%;
            padding:10px;
            margin:10px 0;
        }
        button{
            width:100%;
            padding:10px;
            background:blue;
            color:white;
            border:none;
        }
        .error{
            color:red;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Login Admin</h2>

    <?php if($error != "") echo "<p class='error'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>