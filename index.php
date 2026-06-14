<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <h1>Library Administration System</h1>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="container">

    <div class="card">
        <h2>Add Book</h2>
        <a href="add_book.php"><button>Go</button></a>
    </div>

    <div class="card">
        <h2>View Books</h2>
        <a href="view_books.php"><button>Go</button></a>
    </div>

</div>

</body>
</html>
