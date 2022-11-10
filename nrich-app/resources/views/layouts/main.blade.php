<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>U's Pass</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/6c20dffe37.js" crossorigin="anonymous"></script>
    <!-- scss -->
    {{-- <link rel="stylesheet" href="./scss/ style.css" /> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="header">
        <h1>U's Pass</h1>

        @yield('header-nav')

    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <h1>U's Pass</h1>
    </footer>
</body>

</html>
