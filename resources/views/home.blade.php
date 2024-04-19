<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="post">
        @csrf
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
    </form>
</body>
</html>
