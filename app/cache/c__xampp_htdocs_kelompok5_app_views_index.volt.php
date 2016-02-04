<!DOCTYPE html>
<html>
    <head>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="kelompok">
        <title>kelompok</title>
		<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/jquery-ui.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>
		<?php echo $this->tag->stylesheetLink('font-awesome-4.5.0/css/font-awesome.min.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/jquery-1.12.0.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap-datepicker.min.js'); ?>
		
		<?php echo $this->tag->stylesheetLink('css/bootstrap-multiselect.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap-multiselect.js'); ?>
		<?php echo $this->tag->stylesheetLink('css/bootstrap-datepicker3.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/guardian.css'); ?>
		
			
	
    </head>
    <body>
			<nav class="navbar navbar-default no-margin">
		    <!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header fixed-brand">
		                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
		                      <span <i class="fa fa-hand-peace-o"></i> </span>
		                    </button>
							<?php echo $this->tag->linkTo(array('', '<i class="fa fa-reddit-alien"></i> Kelompok5', 'class' => 'navbar-brand')); ?>
		                     
		                </div>
						<!-- navbar header-->

		                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                            <ul class="nav navbar-nav">
									
		                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> 
										<span <i class="fa fa-hand-peace-o"></i> </span></button></li>
		                            </ul>
		                </div>
						<!-- bs-example-navbar-collapse-1 -->
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
		                    <a href="#"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-calendar-plus-o fa-stack-1x"></i></span>Date</a>      
					</li>
					<li { if selectmenu == "Tabel" }class="active"{ endif }>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-bolt fa-stack-1x"></i></span>Tabel</a>
					</li>
					<li { if selectmenu == "Form " }class="active"{ endif }>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"> <i class="fa fa-folder-o fa-stack-1x"></i></span>Form </a>      
					</li>
				</ul>	
		        </div><!-- /#sidebar-wrapper -->
		        <!-- Page Content -->
		        <div id="page-content-wrapper">
		            <div class="container-fluid xyz">
		                <div class="row">
		                    <div class="col-lg-12">
        <?php echo $this->getContent(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
								    

								<?php echo $this->tag->javascriptInclude('js/sidebar_menu.js'); ?>
    </body>
</html>