<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novella Bookstore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <div class="logo">
            <a href="index.html"><h1>Novella</h1></a>
        </div>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="menu.html">Coffee</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main style="padding: 20px;">
        <h2>Search Books by Genre</h2>
        <form method="GET" style="margin-bottom: 30px;">
            <input type="text" name="genre" placeholder="Enter genre (e.g. Fiction)">
    
            <select name="price_range">
                <option value="">Select Price</option>
                <option value="all">All Prices</option>
                <option value="under10">Under $10</option>
                <option value="10to15">$10 - $15</option>
                <option value="over15">Over $15</option>
            </select>


            <button type="submit">Search</button>
        </form>

        <table>
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
                    $query = "SELECT * FROM books WHERE 1=1";
                    $params = [];

                        // Genre filter (optional)
                        if (isset($_GET['genre']) && !empty(trim($_GET['genre']))) {
                            $query .= " AND genre LIKE ?";
                            $params[] = "%" . trim($_GET['genre']) . "%";
                        }

                        // Price filter (optional)
                        if (isset($_GET['price_range']) && $_GET['price_range'] !== '') {
                            $range = $_GET['price_range'];
                            if ($range === 'under10') {
                                $query .= " AND price < ?";
                                $params[] = 10;
                            } elseif ($range === '10to15') {
                                $query .= " AND price BETWEEN ? AND ?";
                                $params[] = 10;
                                $params[] = 15;
                            } elseif ($range === 'over15') {
                                $query .= " AND price > ?";
                                $params[] = 15;
                            } elseif ($range === 'all') {
                            }
                        }

                $stmt = $pdo->prepare($query);
                $stmt->execute($params);
                $books = $stmt->fetchAll();

                // Show results
                if ($books) {
                    foreach ($books as $book) {
                        echo "<tr>
                            <td>" . htmlspecialchars($book['title']) . "</td>
                            <td>" . htmlspecialchars($book['author']) . "</td>
                            <td>" . htmlspecialchars($book['genre']) . "</td>
                            <td>$" . htmlspecialchars($book['price']) . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No books found with the selected filters.</td></tr>";
                }
                ?>

            </tbody>
        </table>
    </main>
</body>
</html>
