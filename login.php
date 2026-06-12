<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" /> <br><br>
        <label for="password">Username:</label>
        <input type="password" name="password" /> <br><br>
        <input type="submit" value="submit">
</form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["username"];
    $password = $_POST["password"];

    if($name == "shital" && $password == "1234"){
        header("Location: homepage.php");

    }else{
        echo "invalid usename & password";
    }
}