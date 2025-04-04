<?php include('php/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novalla Bookstore</title>
</head>
<body>
    <h1>Novalla Bookstore</h1>

    <form method="GET" action="books.php">
        <input type="text" name="search" placeholder="Search by title, author, or genre" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        <button type="submit">Search</button>
    </form>

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
            $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

            if ($search) {
                $sql = "SELECT title, author, genre, price FROM books
                        WHERE title LIKE '%$search%' 
                           OR author LIKE '%$search%' 
                           OR genre LIKE '%$search%'";
            } else {
                $sql = "SELECT title, author, genre, price FROM books";
            }

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
