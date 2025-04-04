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
            if (file_exists('books.txt')) {
                $books = file('books.txt', FILE_IGNORE_NEW_LINES);
                $search = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
                
                $found = false;
                foreach ($books as $book) {
                    list($title, $author, $genre, $price) = explode(" | ", $book);

                    if ($search === '' || 
                        stripos($title, $search) !== false || 
                        stripos($author, $search) !== false || 
                        stripos($genre, $search) !== false) {
                        
                        echo "<tr>
                                <td>$title</td>
                                <td>$author</td>
                                <td>$genre</td>
                                <td>\$$price</td>
                              </tr>";
                        $found = true;
                    }
                }

                if (!$found) {
                    echo "<tr><td colspan='4'>No books found</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No books found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
