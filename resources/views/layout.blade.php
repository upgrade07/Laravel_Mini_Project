<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
    .footer {
        display: flex;
        width: 100%;
        background-color: rgb(72, 82, 82);
        bottom: 0;
        color: aliceblue;
        position: absolute;
    }

    .content {
        margin: auto;
        text-align: center;
        background-color: rgb(189, 189, 189);
        width: 70%;
    }
</style>

<body>
    @section('header')

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="home">Home</a></li>
                    <li><a href="list">User list</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="create">Create</a></li>
                </ul>
            </div>
        </nav>

    @show
    <div class="content">
        @section('content')

        @show
    </div>

    @section('footer')
        <div class="footer">
            <h1>Copyright@2023</h1>
        </div>
    @show
</body>

</html>
