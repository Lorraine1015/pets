<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pets</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Registro de usuarios</h1>
    <form method="POST" action="{{route('pets.store')}}">
        @csrf
        <label> Nombre </label>
        <input type="text" name="name" value="">
        <label> Email </label>
        <input type="text" name="email" value="">
        <label> Contraseña</label>
        <input type="password" name="password" value="">
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
