<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">n
    <title>Login</title>
</head>
<body>
    <nav>
        <img src="assets/images/logo.png" alt="logo" width="20" height="20">
        <h1>MATCH</h1>
    </nav>
    <section>
        <form action="teams.php" method="POST">
            <h1>Login</h1>
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email" id="email-input">
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" name="password" id="password-input">
            </div>
            <div class="login-btn">
                <button type="submit">Login</button>
            </div>
        </form>
    </section>
</body>
</html>
