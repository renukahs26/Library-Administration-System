<!DOCTYPE html>
<html>
<head>
    <title>Library Book Management System Login</title>

    <style>

    body{
        margin:0;
        font-family:Arial, sans-serif;
        background:#f4f4f4;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }

    .login-box{
        width:450px;
        background:white;
        padding:40px;
        border-radius:15px;
        box-shadow:0 0 20px rgba(0,0,0,0.2);
    }

    .login-box h2{
        text-align:center;
        font-size:32px;
        margin-bottom:30px;
    }

    label{
        font-size:20px;
        font-weight:bold;
    }

    input[type="text"],
    input[type="password"]{
        width:100%;
        padding:12px;
        margin-top:8px;
        margin-bottom:20px;
        font-size:18px;
        border:1px solid #ccc;
        border-radius:5px;
        box-sizing:border-box;
    }

    input[type="submit"]{
        width:100%;
        background:#007bff;
        color:white;
        border:none;
        padding:14px;
        font-size:20px;
        border-radius:5px;
        cursor:pointer;
    }

    input[type="submit"]:hover{
        background:#0056b3;
    }

    </style>
</head>
<body>

<div class="login-box">

    <h2>Library Book Management System</h2>

    <form action="check_login.php" method="POST" autocomplete="off">

        <label>Username</label>
        <input type="text" name="username" autocomplete="off" required>

        <label>Password</label>
        <input type="password" name="password" autocomplete="off" required>

        <input type="submit" value="Login">

    </form>

</div>

</body>
</html>