<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{url('/css/main.css') }}"></link>
    <link href='https://css.gg/css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(window).load(function() {
            $("body").removeClass("pre-load");
        });
    </script>
    <title>DDO.vc</title>
</head>
<body class=".pre-load">
    @include('partials.navbar')
    @include('partials.benefits.benefits')
</body>
    @include('partials.footer')
</html>