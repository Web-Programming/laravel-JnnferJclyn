<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>{{ $kampus }}</h1>
=======
    <meta http-equiv= "X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')

        <hr>
        &copy; {{ date('Y')}} Universitas Multi Data Palembang
    </div>
>>>>>>> ef60bcfd32d8292702b3431af3f951ae788971ac
    <hr>

</body>
</html>
