<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicss.css">

    <title>Login SahabatDifabel</title>
</head>
<body>
    <div class="top">
        <a class="link-button" href="index.php">Home</a>
        <a class="link-button" href="login.php">Login</a>
    </div>
    <div class="middle">
        <form name = "loginForm" method="POST" action="process.php">
            <div class="container">
                <h1 class="container-Title">Selamat Datang di SahabatDifabel</h1>
                <div class="input-box">
                    <label for="">Username</label>
                    <input type="text"     name="username" placeholder="username" required/><br>
                </div>
                <div class="input-box">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="password" required/><br>
                </div>
                <div class="input-box">
                    <button type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
    <div class="bottom">
        
    </div>
</body>
</html>