<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="{{asset('site/style.css')}}">
	<title>Cadastro de Produtos</title>
</head>
<body>
	<div class="container">
		@hasSection('body')
			@yield('body')
		@endif	
	</div>
	<script src="{{asset('site/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('site/bootstrap.js')}}" type="text/javascript"></script>
</body>
</html>