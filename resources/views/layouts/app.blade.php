<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<?php 
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<body>
    <div id="app" class="dark-bg">
        <div class="vh-100">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="{{ $current_page == "index.php" ? "nav-link active" : "nav-link" }}" href="{{ route("index") }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ $current_page == "password" ? "nav-link active" : "nav-link" }}" href="{{ route("password") }}">Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="py-4 d-flex flex-column justify-content-center">
    
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>