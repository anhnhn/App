<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/mystyle.css") }}">
    <script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>User</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 p-4">
                <h4>Manager User</h4>
                <div class="nav flex-column nav-pills pb-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="{{ route('users.index') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">List Users</a>
                    <a class="nav-link" href="{{ route('users.create') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Create Users</a>
                </div>
                <form>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
                </form>
            </div>
            <div class="col-sm-10 border-left set-padding">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <p class="hapo-erp-footer">Haposoft</p>
    </footer>
    <script type="text/javascript" src="{{ asset("js/myjs.js") }}"></script>
</body>
</html>
