<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{url('/css/main.css') }}"></link>
    <link href='https://css.gg/css' rel='stylesheet'>
    
    <title>Dashboard</title>
</head>
<body class="body-dashboard">
    <div class="container">
        @include('partials.sideMenu')
        @if($route)
        @if($route!='null')
        @include('partials.admin.'.$route)
        @else
        <div class="null-container-dashboard">
            <p>Selecione uma opção</p>
        </div>
        @endif
        @endif
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ url('/js/jquery.mask.js') }} "></script>
<script type="text/javascript" src="{{ url('/js/processCpf.js') }} "></script>
</html>