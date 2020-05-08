<?
$connection = new PDO('mysql:host = localhost; dbname=email; charset=utf8',
'root', 'root');

function generateRandomString() {
    $char = '0123456789qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ';
    $random = '';
    for($i=0; $i<20; $i++) {
        $random .= $char[rand(0, (strlen($char)-1))];

    }
    return $random;

}

if ($_POST['username']) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $authKey = generateRandomString();
    $query = $connection->query("INSERT INTO email (username, email, auth_key) 
VALUES ('$username', '$email', '$authKey')");

    if ($query) {
        mail($email, 'Подтвердите почту', "Перейдите по ссылке 
        http://email/?auth=$authKey");
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
    }

    input {
        width: 300px;
        margin: 5px;
    }
</style>
<form action="" method="post">
    <input type="text" name="username" required> <br>
    <input type="email" name="email" required> <br>
    <input type="submit">
</form>

</body>
</html>
