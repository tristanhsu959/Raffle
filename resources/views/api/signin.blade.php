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
		<link href="{{ asset('styles/api/signin.css') }}" rel="stylesheet" />
		
		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
		<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js" integrity="sha256-Fb0zP4jE3JHqu+IBB9YktLcSjI1Zc6J2b6gTjB0LpoM=" crossorigin="anonymous" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>
		<script src="{{ asset('scripts/api/signin.js') }}" defer></script>
	</head>

	<body>
		<div class="content-wrapper">
			<div class="header">
			<img src="{{ asset('images/logo.png') }}" />
			</div>
			
			<div class="container">
				<div class="input-field">
					<select>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</select>
					<label>部門</label>
				</div>
				
				<div class="switch">
					<label>
						工號
						<input type="checkbox">
						<span class="lever"></span>
						姓名
					</label>
				</div>
				<div class="input-field">
					<input id="employee_id" type="text" class="validate">
					<label for="employee_id">工號</label>
				</div>
				
				<div class="input-field">
					<input id="name" type="text" class="validate">
					<label for="name">姓名</label>
				</div>
				
				<div class="input-field">
					<input id="id_num" type="text" class="validate" maxlength="4">
					<label for="id_num">身份證後四碼</label>
				</div>
				
				<div class="action">
					<a id="reset" class="waves-effect waves-light btn btn-flat">Reset</a>
					<a id="submit" class="waves-effect waves-light btn">Submit</a>
				</div>
        	</div>
			
		</div>	  
	</body>
</html>
