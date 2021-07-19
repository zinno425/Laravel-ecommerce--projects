<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='{{asset('js/jquery.zoom.js')}}'></script>
    <script>
        $(document).ready(function(){
            $('#imagePro').zoom();

        });
    </script>


</head>

<body>
    {{ View::make('header') }}
    @yield('content');
    {{ View::make('footer') }}
</body>

<style>
    .login {
        height: 500px;
        padding-top: 100px;
    }

    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(99, 165, 219);
   color: white;
   text-align: center;
}





    .carousel-caption{
        background-color: rgb(181, 114, 243);
    }

    .img.proImages{
        height: 100px;
    }
    .product{

        height: 100px;
    }
    .pro{
        border: 10em;
        border-color: black;
    }




/* styles unrelated to zoom */
* { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}

		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block;
			width:33px;
			height:33px;
			position:absolute;
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }



</style>

</html>
