<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de Login</h1>
    <form method="post" action="{{ route('admin.login.do') }}">
        @csrf
        @foreach($errors->all() as $error)
            <div class="error_alert">{{ $error }}</div>
        @endforeach

        <label for="username">Usuário</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}">

        <label for="password">Senha</label>
        <input type="password" name="password" id="password">

        <button type="submit">Logar</button>   
    </form>
</body>
</html>