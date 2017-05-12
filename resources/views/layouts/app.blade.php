<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Keuzetool OM') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.4/dt-1.10.15/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="container">
        <nav>
            <div class="inner_nav">
                @if(Auth::check() && Auth::user()->is_admin() == 1)
                    <a href="/dashboard"><img src="/images/KdG_H_Closed_White.png" alt="KdG-logo wit" class="logo"></a>
                @else
                    <a href="/"><img src="/images/KdG_H_Closed_White.png" alt="KdG-logo wit" class="logo"></a>
                @endif
                <h1 class="nav_text">Office Management - Keuzetool</h1>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
    </script>
    <script
        src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.4/dt-1.10.15/datatables.min.js"></script>
    <script>
		$('#students_all').DataTable( {
			"pagingType": "full_numbers"
		} );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
