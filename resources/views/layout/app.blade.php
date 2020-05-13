<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="{{asset('site/style.css')}}">
	<title>Cadastro de Produtos</title>
	<style type="text/css">
		body {
			padding: 20px;
		}
		.navbar {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		@component('componente_navbar', ["current" => $current])
		@endcomponent
		<main role="main">
			@hasSection('body')
				@yield('body')
			@endif
		</main>	
	</div>
	<script src="{{asset('site/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('site/bootstrap.js')}}" type="text/javascript"></script>
	@hasSection('javascript')
		@yield('javascript')
	@endif	
</body>
</html>