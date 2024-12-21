<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>login</h2>
    <form action="index.php" method="post">
        <input type="text" name="username" id="" placeholder="username"><br>
        <input type="text" name="password" id="" placeholder="password"><br>
        <input type="submit" value="login">
    </form>

    <?php 
    $info = array('mahdi', '123');
    $username = $_POST['username'];
    $password = $_POST["password"];
    if (isset($username) && !empty($username) &&
        isset($password) && !empty($password)) {

        if ($username == $info[0] && $password == $info[1]) 
            include("welcom.html");

        else
            include("fail.html");
    }
    else{
        echo "some fileds arren't currect";
    }

    ?>
</body>
</html>