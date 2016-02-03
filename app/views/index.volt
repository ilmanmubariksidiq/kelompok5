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
		{{ stylesheet_link("css/bootstrap-datepicker3.css") }}
		{{ stylesheet_link("css/guardian.css") }}
    
	
	</head>
    
	
	<body>
	<nav class="navbar navbar-default no-margin">
	<!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header fixed-brand">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
		                      <span <i class="fa fa-hand-peace-o"></i> </span>
							  </button>
							{{ link_to('','<i class="fa fa-reddit-alien"></i> Kelompok 5', 'class': 'navbar-brand') }}
							
							</div>
						<!-- navbar header-->
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                            <ul class="nav navbar-nav">
									
									<li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> 
										<span <i class="fa fa-hand-peace-o"></i> </span></button></li>
		                            </ul>
									
									</div>
						
	</nav>
	<div id="wrapper">
						<!-- Sidebar -->
		        <div id="sidebar-wrapper">
					<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
						<br></br>
						<li { if selectmenu == "Gallery" }class="active"{ endif }>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-picture-o fa-stack-1x"></i></span>Gallery</a>
						</li>
						<li { if selectmenu == "Date" }class="active"{ endif }>
							<a href="/kelompok/date"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-calendar-plus-o fa-stack-1x"></i></span>Date</a>
						</li>
						<li { if selectmenu == "Tabel" }class="active"{ endif }>
							<a href="/kelompok/tabel"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-bolt fa-stack-1x"></i></span>Tabel</a>
						</li>
						<li { if selectmenu == "Form " }class="active"{ endif }>
							<a href="/kelompok/form"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-folder-o fa-stack-1x"></i></span>Form </a>
						</li>
					</ul>	
				</div>
				
				<div id="page-content-wrapper">
					<div class="container-fluid xyz">
						<div class="row">
							<div class="col-lg-12">
				{{ content() }}
					</div>
						</div>
							</div>
				</div>
	</div>
       
       {{ javascript_include("js/sidebar_menu.js") }}     
        
    </body>
</html>
