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
        /* Reset Margin dan Padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); /* Warna Gradient Modern */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
}

/* Kotak Login */
.box {
    background: white;
    padding: 40px;
    border-radius: 15px;
    width: 100%;
    max-width: 380px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    text-align: center;
}

h2 {
    margin-bottom: 25px;
    font-weight: 600;
    color: #4a4a4a;
    letter-spacing: 1px;
}

/* Input Fields */
input {
    width: 100%;
    padding: 12px 15px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease;
}

input:focus {
    border-color: #764ba2;
    box-shadow: 0 0 8px rgba(118, 75, 162, 0.2);
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    margin-top: 20px;
    background: #764ba2;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

button:hover {
    background: #5a3782;
}

button:active {
    transform: scale(0.98); /* Efek membal saat diklik */
}

/* Error Message */
.error {
    background: #ffebee;
    color: #c62828;
    padding: 10px;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 15px;
    border-left: 5px solid #c62828;
}

/* Link Tambahan (Opsional) */
.footer-text {
    margin-top: 20px;
    font-size: 12px;
    color: #888;
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