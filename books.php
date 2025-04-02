<?php include('php/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Novella Bookstore</title>
  <link rel"stylesheet" href="style.css">
</head>
<body>
    <h1>Novalla Bookstore</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Price ($)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT title, author, genre, price FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['title']}</td>
                            <td>{$row['author']}</td>
                            <td>{$row['genre']}</td>
                            <td>\${$row['price']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No books found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
