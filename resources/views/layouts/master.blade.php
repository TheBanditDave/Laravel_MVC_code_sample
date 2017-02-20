<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>TODO List Tracker</title>
        
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <!-- App top bar -->
            <nav class="navbar navbar-default">
                <div class="navbar-brand">TODO List Tracker</div>
            </nav>

            <!-- Main Content -->        
            @yield('content')
        </div>
    </body>
</html>