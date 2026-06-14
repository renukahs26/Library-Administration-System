<?php include 'db.php'; ?>

<?php
$message = "";

if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO books(title, author, quantity)
            VALUES('$title', '$author', '$quantity')";

    if($conn->query($sql)){
        $message = "Book Added Successfully!";
    } else {
        $message = "Error Adding Book!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>

    <style>

    body{
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin: 0;
    }

    .box{
        width: 500px;
        margin: 80px auto;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    h2{
        text-align: center;
        font-size: 32px;
        margin-bottom: 30px;
    }

    input{
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        font-size: 18px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .add-btn{
        width: 100%;
        padding: 14px;
        background: #28a745;
        color: white;
        border: none;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
    }

    .add-btn:hover{
        background: #218838;
    }

    .back-btn{
        display: block;
        text-align: center;
        margin-top: 20px;
        background: #007bff;
        color: white;
        text-decoration: none;
        padding: 12px;
        border-radius: 5px;
        font-size: 18px;
    }

    .back-btn:hover{
        background: #0056b3;
    }

    .message{
        text-align:center;
        color:green;
        font-weight:bold;
        margin-bottom:20px;
    }

    </style>

</head>
<body>

<div class="box">

    <h2>Add Book</h2>

    <?php
    if($message != ""){
        echo "<p class='message'>$message</p>";
    }
    ?>

    <form method="POST">

        <input type="text" name="title" placeholder="Enter Book Title" required>

        <input type="text" name="author" placeholder="Enter Author Name" required>

        <input type="number" name="quantity" placeholder="Enter Quantity" required>

        <button type="submit" name="submit" class="add-btn">
            Add Book
        </button>

    </form>

    <a href="index.php" class="back-btn">
        Back to Dashboard
    </a>

</div>

</body>
</html>
