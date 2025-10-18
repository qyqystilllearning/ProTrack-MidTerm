<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProTrack</title>

    @vite('resources/css/app.css')
    
</head>
<body class="container"> 
    <h1>Welcome!</h1>
    <p>Build your Project Tracker by using ProTrack!</p>

    <a href="{{ route('projects.index') }}" class="btn mt-4 inline-block">
        Click Here!
    </a>
</body>
</html>