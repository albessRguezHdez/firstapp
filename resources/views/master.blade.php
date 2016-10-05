<!DOCTYPE html>
<html>
<head>
	<title>Point&creative</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">  
</head>
<body>
	<nav class="navbar navbar-inverse">
	    <div class="container-fluid">
            <div class="navbar-header">
	           	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        	<span class="sr-only"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
		        </button>
		        
	        </div> <!-- navbar-header -->
	        <div class="collapse navbar-collapse">
		        <ul class="nav nav-tabs nav-justified nav-stacked">
                    <li><span><img src="{{ URL::asset('bootstrap/images/logowhite_ch.png') }}" width="50" height="50"></span></li>
			        <li><a href="{{ URL::to('/home') }}">HOME<span></span></a></li>
			        <li><a href="{{ URL::to('/home/news') }}">NEWS<span></span></a></li>
			        <li><a href="{{ URL::to('/home/products') }}">PRODUCTS<span></span></a></li>
			        <li><a href="{{ URL::to('/home/about') }}">ABOUT<span></span></a></li>
			        <li><a href="{{ URL::to('/home/ourwork') }}">OUR WORK<span></span></a></li>
			        <li><a href="{{ URL::to('/home/signup') }}">SIGN UP<span></span></a></li>
			        <li><a href="{{ URL::to('/home/search') }}">SEARCH<span></span></a></li>
			        <li><a href="{{ URL::to('/home/social') }}">SOCIAL<span></span></a></li>
                    
		        </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
	        </div> <!-- collapse navbar-collapse -->
        </div> <!-- container-fluid -->
    </nav>
	@yield('content')

    <div class="footer">
        @PuntoCreativoStudio. 2016.
    </div>

</body>
</html>