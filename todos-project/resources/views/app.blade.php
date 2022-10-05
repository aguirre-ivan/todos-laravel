<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>ToDos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0fd078418e.js"
        crossorigin="anonymous"></script>
    <link rel='stylesheet'
        type='text/css'
        media='screen'
        href="{{ asset('/css/app.css') }}">
</head>

<body>
    @include('partials.header')

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>