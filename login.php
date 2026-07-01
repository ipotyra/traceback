<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/cabecalio.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <div class="title-container">
        <h1>Trace Back</h1>
        <nav class="menu">
            <ul>
                <li><a href="index.html">Map View</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="report.html">Report</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </div>    
        <main>
            <h2>Login</h2>
           
           <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['uname'] ?? '';
            $password = $_POST['password'] ?? '';

            echo"<p>Welcome</p>";
            }
            ?>

            <form method="POST" action=""> 
                <label for="uname">Email:</label>
                <input type="email" id="uname" name="uname" value="" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="" required>

                <button type="submit">Login</button>
            </form>
        </main>
        <footer>
            <ul class="footerlista">
                <li><a href="index.html">Map View</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="report.html">Report</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
            <small>
                Copyright © 2026. All Rights Reserved.
            </small>
        </footer>
</body>
</html>