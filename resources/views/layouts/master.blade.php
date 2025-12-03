@include('menu')

<!DOCTYPE html>
<html lang="en">
	<head>
    
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>八方雲集</title>
		
		<link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
		<!-- Styles & Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
		<link href="{{ asset('styles/_variables.css') }}" rel="stylesheet" />
		<link href="{{ asset('styles/web.css') }}" rel="stylesheet" />
		@stack('styles')
	
		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
		<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js" integrity="sha256-Fb0zP4jE3JHqu+IBB9YktLcSjI1Zc6J2b6gTjB0LpoM=" crossorigin="anonymous" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>
		@stack('scripts')
	
	</head>

	<body>
		@yield('menu')
		@yield('content')
		
		<footer>
			@hasSection('backUrl')
			<a href="@yield('backUrl')" class="nav right">BACK</a>
			@endif
		</footer>	  
	</body>
</html>