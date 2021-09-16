<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{('css/main.css') }}"></link>
    <title>Painel Administrativo</title>
    <script>
        $(window).load(function() {
            $("body").removeClass("pre-load");
        });
    </script>
</head>
<body class="body-home pre-load">
    <div class="container-home">
        <div class="container-center">
            <h1 class="text-title">
                Painel Administrativo
            </h1>
            <p class="text-description">
                Este é um sistema de teste, utilizado para estudos e aplicação dos conhecimentos em desenvolvimento <span>Front-End</span>, <span>Back-End</span> e <span>Banco de Dados</span>.
                Nele você encontrará <span>CRUDs</span>, <span>Layouts</span>, <span>Paginações</span> e <span>Utilização de APIs</span>.
            </p>
           <div class="container-buttons">
               <a href="{{ route('admin')}}">
                   <button class="first-button">Acessar Painel</button>
               </a>

               <a href="https://github.com/kaiofgl/AdministrativePanelLaravel">
                   <button class="first-button">Github</button>
               </a>
               
           </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>