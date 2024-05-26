<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="checkbox" @checked($user['premium']) value="Premium">
        <input type="text" value="{{ $user['name'] }}" @readonly(!$user['admin'])>
    </form>
</body>
</html>