

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logInPage</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="main">
    <p class="logIn">Log in</p>
    <p> <?php echo $error ; ?></p>
    <form class="form1">
        <input type="text" class="userName" placeholder="Username" name="username">
        <input type="password" class="password" placeholder="password" name="password">
        <input type="submit" class="submit" name="submit" value="Log in" >
        <p class="forgot"><a href="#">Forgot Password?</a></p>
    </form>

    </div>
</body>
</html>