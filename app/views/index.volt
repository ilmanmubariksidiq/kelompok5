<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="kelompok">
		<title>kelompok </title>
		{{ stylesheet_link("css/bootstrap.min.css") }}
		{{ stylesheet_link("css/jquery-ui.min.css") }}
		{{ stylesheet_link("css/simple-sidebar.css") }}
		{{ stylesheet_link("font-awesome-4.5.0/css/font-awesome.min.css") }}
		{{ javascript_include("js/jquery-1.12.0.min.js") }}
		{{ javascript_include("js/bootstrap.min.js") }}
		{{ javascript_include("js/bootstrap-datepicker.min.js") }}
		{{ javascript_include("js/jquery.guardian-1.0.min.js.js") }}
		
		{{ stylesheet_link("css/bootstrap-multiselect.css") }}
		{{ javascript_include("js/bootstrap-multiselect.js") }}
    </head>
    <body>
        <div class="container">
            {{ content() }}
        
    </body>
</html>
