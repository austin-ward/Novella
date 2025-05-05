<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Novella</title>
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
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main style="padding: 50px; text-align: center;">
        <h2>Create an Account</h2>
        <form action="register_process.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">Register</button>
        </form>
    </main>
</body>
</html>
