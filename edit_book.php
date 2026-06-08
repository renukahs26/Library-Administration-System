<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM books WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE books 
            SET title='$title',
                author='$author',
                quantity='$quantity'
            WHERE id=$id";

    if($conn->query($sql) === TRUE) {

        header("Location: view_books.php");

    } else {

        echo "Error updating";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>

<h2>Edit Book</h2>

<form method="POST">

    Title:
    <input type="text" name="title"
           value="<?php echo $row['title']; ?>">
    <br><br>

    Author:
    <input type="text" name="author"
           value="<?php echo $row['author']; ?>">
    <br><br>

    Quantity:
    <input type="number" name="quantity"
           value="<?php echo $row['quantity']; ?>">
    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

</body>
</html>