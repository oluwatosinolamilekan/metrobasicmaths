<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->

        
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        
            <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">            
            <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
            

                
        

    </head>
	<body>
        @include('layouts.navbar')

        <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The MetroBasic Maths Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
        </div>

        <div class="container">
            <div class="row">
                @yield('content')

                @include('layouts.sidebar')

            </div>
        </div>            
                    


	</body>
</html>