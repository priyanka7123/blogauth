<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
        <a href="{{route('post.index')}}" class="navbar-brand">Blog</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{route('post.create')}}" class="nav-link">Insert</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
