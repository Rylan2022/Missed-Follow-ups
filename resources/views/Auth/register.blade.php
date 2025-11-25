<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Please register</h1>
    <p>Then access dashboard Page</p>
    <form action="{{ route('postRegister') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>