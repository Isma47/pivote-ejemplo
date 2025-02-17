<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>

<h2>Iniciar sesión</h2>

@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

<form method="post" action="{{ route('index') }}">
    @csrf
    <label for="email">Correo electrónico:</label><br>
    <input type="text" id="email" name="email" value="{{ old('email') }}"><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>
