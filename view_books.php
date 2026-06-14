<?php
include 'db.php';

$search = "";

if(isset($_GET['search'])) {

    $search = $_GET['search'];

    $result = $conn->query(
        "SELECT * FROM books
         WHERE title LIKE '%$search%'
         OR author LIKE '%$search%'"
    );

} else {

    $result = $conn->query("SELECT * FROM books");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Books</title>

    <style>

    body{
        font-family: Arial, sans-serif;
        background:#f4f4f4;
        margin:0;
        padding:30px;
    }

    h2{
        text-align:center;
        font-size:36px;
    }

    .top-bar{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:20px;
    }

    .back-btn{
        background:#007bff;
        color:white;
        text-decoration:none;
        padding:10px 20px;
        border-radius:5px;
    }

    .search-box{
        text-align:center;
        margin-bottom:20px;
    }

    .search-box input{
        padding:10px;
        width:300px;
        font-size:16px;
    }

    .search-box button{
        padding:10px 20px;
        background:#28a745;
        color:white;
        border:none;
        cursor:pointer;
    }

    table{
        width:100%;
        border-collapse:collapse;
        background:white;
        box-shadow:0 0 10px rgba(0,0,0,0.2);
    }

    th{
        background:#343a40;
        color:white;
        padding:15px;
    }

    td{
        padding:12px;
        text-align:center;
        border-bottom:1px solid #ddd;
    }

    .edit-btn{
        background:#ffc107;
        color:black;
        padding:8px 15px;
        text-decoration:none;
        border-radius:5px;
    }

    .delete-btn{
        background:#dc3545;
        color:white;
        padding:8px 15px;
        text-decoration:none;
        border-radius:5px;
    }

    </style>

</head>
<body>

<div class="top-bar">
    <a href="index.php" class="back-btn">Back to Dashboard</a>
</div>

<h2>Library Books</h2>

<div class="search-box">
    <form method="GET">
        <input type="text"
               name="search"
               placeholder="Search by Title or Author">

        <button type="submit">
            Search
        </button>
    </form>
</div>

<table>

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Quantity</th>
    <th>Action</th>
</tr>

<?php
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
?>
<tr>

    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['quantity']; ?></td>

    <td>

        <a class="edit-btn"
           href="edit_book.php?id=<?php echo $row['id']; ?>">
           Edit
        </a>

        <a class="delete-btn"
           href="delete_book.php?id=<?php echo $row['id']; ?>">
           Delete
        </a>

    </td>

</tr>

<?php
    }
}
else
{
    echo "<tr><td colspan='5'>No Books Found</td></tr>";
}
?>

</table>

</body>
</html>
