<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="dark-bg">
        <div class="py-4 vh-100 d-flex flex-column justify-content-center">
            @yield('content')
        </div>
    </div>
</body>

</html>