<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        .cotainer {
            display: flex;
            justify-content: center;
            align-items: center;
        }



        form {
            display: flex;
            border-radius: 10px;


        }
    </style>
</head>

<body>
    <div class="cotainer">
        <form action="islogin.php" method="post">
            <table border="1">
                <tr>
                    <td><label for="user_name">User Name</label></td>
                    <td><input type="text" name="user_name" id="user_name"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Log in">

                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>