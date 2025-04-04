<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a Book</title>
</head>
<body>
    <h1>Add a New Book</h1>
    
    <form action="add_book.php" method="POST">
        <label>Title:</label>
        <input type="text" name="title" required><br><br>

        <label>Author:</label>
        <input type="text" name="author" required><br><br>

        <label>Genre:</label>
        <input type="text" name="genre" required><br><br>

        <label>Price:</label>
        <input type="number" name="price" step="0.01" required><br><br>

        <button type="submit" name="submit">Add Book</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $title = trim($_POST['title']);
        $author = trim($_POST['author']);
        $genre = trim($_POST['genre']);
        $price = trim($_POST['price']);

        // Format book entry and save to books.txt
        $bookEntry = "$title | $author | $genre | $price\n";

        file_put_contents('books.txt', $bookEntry, FILE_APPEND);

        echo "<p style='color: green;'>Book added successfully!</p>";
    }
    ?>
</body>
</html>
