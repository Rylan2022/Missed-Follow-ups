<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Please login</h1>
    <p>Then access dashboard Page</p>
    <form action="{{ route('postlogin') }}" method="post">
        @csrf
        <label for="name">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>