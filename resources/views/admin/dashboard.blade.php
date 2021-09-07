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
<body>
    <h1>Painel Admin </h1>
    <table>
        <thead>
            <th>Empresa</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
        </thead>
        <tbody>
            <tr>
                <td>Primeira Empresa</td>
                <td>Primeira Empresa Email</td>
                <td>Primeira Empresa Logo</td>
                <td>Primeira Website</td>
            </tr>
            <tr>
                <td>Primeira Empresa</td>
                <td>Primeira Empresa Email</td>
                <td>Primeira Empresa Logo</td>
                <td>Primeira Website</td>
            </tr>
            <tr>
                <td>Primeira Empresa</td>
                <td>Primeira Empresa Email</td>
                <td>Primeira Empresa Logo</td>
                <td>Primeira Website</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('admin.logout') }}">Logout</a>
</body>
</html>