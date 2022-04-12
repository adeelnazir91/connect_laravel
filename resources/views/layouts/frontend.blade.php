<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.cinnect.net/css/plugins.css" rel="stylesheet" />
		<link href="https://cdn.cinnect.net/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdn.form.io/formiojs/formio.full.min.css" />
        <link rel="stylesheet" href="./jake-styles.css">
        <link href="{{asset('frontend/css/jake-styles.css')}}" rel="stylesheet">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"> -->
       
      
    </head>
    <body>

      <div>
          @include('layouts.inc.navbar')
          @yield('content')
      </div>

      <script src="https://cdn.cinnect.net/js/jquery.js"></script>
	  <script src="https://cdn.cinnect.net/js/plugins.js"></script>
		<!--Template functions-->
	 <script src="https://cdn.cinnect.net/js/functions.js"></script>

      <!-- <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script> -->
 
    </body>
</html>
