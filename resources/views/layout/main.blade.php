<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/assets/scss/app.scss', 'resources/js/app.js')
    @vite('resources/assets/scss/app.scss', 'public/build/assets')
</head>

<body>
    <div class="wrapper">

        <aside class="sidebar">
            <div class="brand">
                <img class="brand__image" src="" alt="">
                <span class="brand__text">Brand Text</span>
            </div>
        </aside>


        @yield('content')
    </div>

</body>

</html>
