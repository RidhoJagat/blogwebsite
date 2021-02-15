<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman index</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h2>Halaman Login</h2>
    <form action="cek_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>