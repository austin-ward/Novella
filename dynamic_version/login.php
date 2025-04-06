<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Novella</title>
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

    <main style="padding: 50px; text-align: center;">
    <h2>Login to Novella</h2>
    <form action="login_logic.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <br>
    <p>Don't have an account?</p>
    <a href="register.php"><button type="button">Register</button></a>
</main>
</body>
</html>

