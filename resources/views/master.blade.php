<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            footer {
                text-align: center;
                font-family: 'Times';
                font-size: 10px;
            }

            section {
            	text-align: center;
            	font-family: 'Arial';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
</head>
<body>
	<nav>
	<div>
		<button>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</button>
		<a>
			<img>
		</a>
	</div>
	<div>
		<ul>
			<li><a>HOME<span></span></a></li>
			<li><a>NEWS<span></span></a></li>
			<li><a>PRODUCTS<span></span></a></li>
			<li><a>ABOUT<span></span></a></li>
			<li><a>OUR WORK<span></span></a></li>
			<li><a>SIGN UP<span></span></a></li>
			<li><a>SEARCH<span></span></a></li>
			<li><a>SOCIAL<span></span></a></li>
		</ul>
	</div>
</nav>
	@yield('content')

</body>
</html>