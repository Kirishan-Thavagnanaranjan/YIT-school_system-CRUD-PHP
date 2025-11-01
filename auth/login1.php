<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../style1.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <header>Login</header>
        <form action="" method="post">
            <div class="field input">
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" id="user_name" placeholder="Enter the user name.." required>
            </div>
            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter the password.." required>
            </div>
            <div class="field">
                <input type="submit" name="submit" value="Login">
            </div>
            <div class="links">
                Don't have account? <a href="">Sign Up</a>
            </div>
        </form>
        </div>

    </div>
    
</body>
</html>