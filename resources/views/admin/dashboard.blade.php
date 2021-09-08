<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{('css/main.css') }}"></link>
    <!-- <link type="text/css" rel="stylesheet" href="/public/css/main.css"></link> -->
    
    <title>Document</title>
</head>
<body class="body-dashboard">
    <div class="container">
        <div class="side-menu">
            <h1>Dashboard</h1>
            <ul class="menu">
                <li>Empresas</li>
                <li>Listar</li>
                <li>Adicionar</li>
                <li>Editar</li>
            </ul>
            <ul class="menu">
                <li>Funcionários</li>
                <li>Listar funcionários</li>
                <li>Adicionar</li>
                <li>Editar</li>
            </ul>
            <div class="logout-container">
                <a href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
        <div class="container-dashboard">
            <div class="title-dashboard">
                Title - Teste
            </div>
        </div>
    </div>
</body>
</html>