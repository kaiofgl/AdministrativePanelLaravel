<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{url('/css/main.css') }}"></link>
    <title>Document</title>
</head>
<body class="body-dashboard">
    <div class="container">
        @include('partials.sideMenu')

        <div class="container-dashboard">
            <div class="title-dashboard">
                @if($route)
                    @if($route!='null')
                        @include('partials.admin.'.$route,[
                            'data'=>$data])
                    @else
                    <div class="null-container-dashboard">
                        <p>Selecione uma opção</p>
                    </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</body>
</html>