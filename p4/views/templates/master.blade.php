<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/planner.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <header>
        <h1>PUT AN IMAGE HERE (master template)</h1>
        <h1>{{ $app->config('app.name') }} (master template)</h1>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>


</html>