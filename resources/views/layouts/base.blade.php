<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1 class="font-weight-bold text-uppercase text-danger m-3 text-center bg-info p-5">Comics</h1>
    <main>
        <div class="container">
            @yield('content')
        </div>
</main>
</body>
</html>