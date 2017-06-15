<?php
$app  = JFactory::getApplication();
$doc  = JFactory::getDocument();
$user = JFactory::getUser();
$templateparams = $app->getTemplate(true)->params;
$this->language = $doc->language;
$this->direction = $doc->direction;


// Social icons
$soc = array(
	"fa-twitter" => $this->params->get("twitter"),
	"fa-facebook" => $this->params->get("facebook"),
	"fa-flickr" => $this->params->get("flickr"),
	"fa-linkedin" => $this->params->get("linkedin"),
	"fa-youtube-play" => $this->params->get("youtube"),
	"fa-pinterest" => $this->params->get("pinterest"),
	"fa-google-plus" => $this->params->get("google"),
	"fa-dribbble" => $this->params->get("dribbble"),
	"fa-vimeo-square" => $this->params->get("vimeo"),
	"fa-instagram" => $this->params->get("instagram"),
	"fa-vk" => $this->params->get("vk")
); 

// count Modules
$left	 = $this->countModules('SidebarLeft');
$right   = $this->countModules('SidebarRight');
$search  = $this->countModules('Search');
$topmenu = $this->countModules('topMenu');
$copyrights = $this->params->get("copyrights");

// Add Stylesheets

$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/style.css");

// Add Script
$doc->addScript($this->baseurl."/templates/".$this->template."/javascript/custom.js");
$doc->addScript($this->baseurl."/templates/".$this->template."/javascript/circle-progress.js");

//if(version_compare(JVERSION,"3.0.0","ge")){
 //  JHtml::_('bootstrap.framework');
//}  else {
   // $doc->addScript($this->baseurl."/templates/".$this->template."/bootstrap/js/bootstrap-joomin.js");
   //$doc->addScript($this->baseurl."/templates/".$this->template."/bootstrap/js/bootstrap.min.js");

//}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/jquery.js"></script>
	<script type="text/javascript">jQuery.noConflict();</script>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Dosis:200,300,400,500,600,700,800|Abel|Droid+Sans:400,700|Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Lora:400,700,400italic,700italic|PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700|Quicksand:300,400,700|Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic|Lobster|Ubuntu+Condensed|Oxygen:400,300,700|Oswald:700,400,300|Open+Sans+Condensed:300,700,300italic|Roboto+Condensed:300italic,400italic,700italic,400,700,300|Open+Sans:300italic,400italic,600italic,700italic,800italic,800,700,400,600,300|Prosto+One|Francois+One|Comfortaa:700,300,400|Raleway:300,600,900,500,400,100,800,200,700|Roboto:300,700,500italic,900,300italic,400italic,900italic,100italic,100,500,400,700italic|Roboto+Slab:300,700,100,400|Share:700,700italic,400italic,400' rel='stylesheet' type='text/css'
>

 	<jdoc:include type="head" />
 
<script type="text/javascript"><?php echo $this->params->get('tracking_code')?></script>
<!--[if IE 7]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie7.css" /> <![endif]-->
<!--[if IE 8]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie8.css" /> <![endif]-->
<!--[if IE 9]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie9.css" /> <![endif]-->

<style type="text/css">
body {
    font-family:"<?php echo $this->params->get('body_font', 'PT Sans Narrow') ?>";
    background-color:<?php echo $this->params->get('body_color')?>; 
    background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/<?php echo $this->params->get('body_background')?>');
}
a {
    color:<?php echo $this->params->get('body_link_color')?>;
    text-decoration:<?php echo $this->params->get('body_underline', 'underline')?>;
    font-family:"<?php echo $this->params->get('links_font', 'PT Sans Narrow')?>";
}
a:hover {
    color:<?php echo $this->params->get('body_link_hover_color')?>;
    text-decoration:<?php echo $this->params->get('body_hover_underline')?>;
}
.top_menu li a {
    color:<?php echo $this->params->get('top_menu_color')?>;
    text-decoration:<?php echo $this->params->get('top_menu_underline', 'underline')?>;
    font-family:"<?php echo $this->params->get('top_menu_font', 'PT Sans Narrow')?>";
}
.top_menu li a:hover {
    color:<?php echo $this->params->get('top_menu_hover_color')?>;
    text-decoration:<?php echo $this->params->get('top_menu_hover_underline')?>;
} 
.main_menu li a {
    color:<?php echo $this->params->get('main_menu_color')?>;
    text-decoration:<?php echo $this->params->get('main_menu_underline', 'underline')?>;
    font-family:"<?php echo $this->params->get('main_menu_font', 'PT Sans Narrow')?>";
}
.main_menu li a:hover {
    color:<?php echo $this->params->get('main_menu_hover_color')?>;
    text-decoration:<?php echo $this->params->get('main_menu_hover_underline')?>;
}
.footer_menu li a {
    color:<?php echo $this->params->get('menu_footer_color')?>;
    text-decoration:<?php echo $this->params->get('menu_footer_underline', 'underline')?>;
    font-family:"<?php echo $this->params->get('footer_menu_font', 'PT Sans Narrow')?>";
}
.footer_menu li a:hover {
    color:<?php echo $this->params->get('menu_footer_hover_color')?>;
    text-decoration:<?php echo $this->params->get('menu_footer_hover_underline')?>;
}


h1 {font-family:"<?php echo $this->params->get('h1_font', 'PT Sans Narrow')?>";}
h2 {font-family:"<?php echo $this->params->get('h2_font', 'PT Sans Narrow')?>";}
h3 {font-family:"<?php echo $this->params->get('h3_font', 'PT Sans Narrow')?>";}
h4 {font-family:"<?php echo $this->params->get('h4_font', 'PT Sans Narrow')?>";}
h5 {font-family:"<?php echo $this->params->get('h5_font', 'PT Sans Narrow')?>";}
h6 {font-family:"<?php echo $this->params->get('h6_font', 'PT Sans Narrow')?>";}
</style>

</head>
<body>
	<div class="header">
		<div id="header" class="container">

			<div  class="row">
				<?php if ($search): ?>
				    <div id="Search" class="search col-lg-12 col-md-12 col-sm-12 col-xs-12">
				    	<jdoc:include type="modules" name="Search" style="xhtml" />
				    </div>
				<?php endif; ?>
			</div>

			<div  class="row">

				<?php if ($topmenu): ?>
				    <div class="top_menu col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div id="site-navigation-top" class="navbar" role="navigation">
							<div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-navbar-collapse">
						        <i class="fa fa-bars"></i>
						      </button>
						    </div>
							<div id="top-navbar-collapse" class="collapse navbar-collapse navbar-ex1-collapse">
								<jdoc:include type="modules" name="topmenu" style="xhtml" />
							</div>
						</div><!-- #site-navigation -->
				    </div>
				<?php endif; ?>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				    <div id="logo">
						<a href="<?php echo $this->params->get('logo_link')?>">
						    <img style="width:<?php echo $this->params->get('logo_width')?>px; height:<?php echo $this->params->get('logo_height')?>px; " src="<?php echo $this->params->get('logo_file')?>" alt="Logo" />
						</a>
				    </div>
				</div>
				
				<?php if ($this->countModules('position-0')): ?>
					<div class="cart col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    <jdoc:include type="modules" name="position-0" style="xhtml" />
					</div>
				<?php endif; ?>				

			</div>

			    <?php if ($this->countModules('Top1') || $this->countModules('Top2') || $this->countModules('Top3') || $this->countModules('Top4')): ?>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<jdoc:include type="modules" name="Top1" style="xhtml" />
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<jdoc:include type="modules" name="Top2" style="xhtml" />
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<jdoc:include type="modules" name="Top3" style="xhtml" />
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<jdoc:include type="modules" name="Top4" style="xhtml" />
					</div>
				</div>
			    <?php endif; ?>

			    <div class="row">				
					<?php if ($this->countModules('Mainmenu')): ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    <div class="main_menu">
								<nav id="site-navigation-main" class="navbar" role="navigation">
									<div class="navbar-header">
								      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
								        <i class="fa fa-bars"></i>
								      </button>
								    </div>
									<div id="main-navbar-collapse" class="collapse navbar-collapse">
										<jdoc:include type="modules" name="Mainmenu" style="xhtml" />
									</div>
								</nav><!-- #site-navigation -->
						    </div>
						</div>
					<?php endif; ?>
			    </div>
			</div> <!--id header-->
		 </div> <!--class header-->

		<div id="wrapper" class="container">
		    <?php if ($this->countModules('Breadcrumbs') || $this->countModules('position-0')): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<jdoc:include type="modules" name="Breadcrumbs" style="xhtml" />
				</div>
			</div>
		    <?php endif; ?>
		    <?php if ($this->countModules('Slideshow') || $this->countModules('position-1')): ?>
				<div class="row">
					<div class="slr col-lg-9 col-md-9 col-sm-9 col-xs-12">
					    <jdoc:include type="modules" name="Slideshow" style="xhtml" />
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					    <div class="banners_groups">
					    	<jdoc:include type="modules" name="position-1" style="xhtml" />
					    </div>
					</div>
				</div>
		    <?php endif; ?>

		    <?php if ($this->countModules('position-2')): ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					    <jdoc:include type="modules" name="position-2" style="xhtml" />
					</div>
				</div>
		    <?php endif; ?>

		    <?php if ($this->countModules('Feature1') || $this->countModules('Feature2') || $this->countModules('position-3') || $this->countModules('Feature3') || $this->countModules('position-4')): ?>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<jdoc:include type="modules" name="Feature1" style="xhtml" />
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<jdoc:include type="modules" name="Feature2" style="xhtml" />
					<jdoc:include type="modules" name="position-3" style="xhtml" />
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<jdoc:include type="modules" name="Feature3" style="xhtml" />
					<jdoc:include type="modules" name="position-4" style="xhtml" />
				</div>
			</div>
		    <?php endif; ?>

			<div id="globalContent">

				<?php if ($this->countModules('ContentTop1') || $this->countModules('position-5') || $this->countModules('ContentTop2') || $this->countModules('position-6')): ?>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<jdoc:include type="modules" name="ContentTop1" style="xhtml" />
							<jdoc:include type="modules" name="position-5" style="xhtml" />
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<jdoc:include type="modules" name="ContentTop2" style="xhtml" />
							<jdoc:include type="modules" name="position-6" style="xhtml" />
						</div>
					</div>
				<?php endif; ?>

			    <div class="row">
					<?php if ($left): ?>
					      <div class="sidebar-left col-lg-3 col-md-3 col-sm-3 col-xs-12"><jdoc:include type="modules" name="SidebarLeft" style="xhtml" /></div>
					<?php endif; ?>

						<div id="contentBox" class="<?php if ($left && $right) {print('col-lg-6 col-md-6 col-sm-6 col-xs-12');} else if ($left || $right) {print('col-lg-9 col-md-9 col-sm-9 col-xs-12');} else {print('col-lg-12 col-md-12 col-sm-12 col-xs-12');} ?>">
							<jdoc:include type="modules" name="location_map" style="xhtml" />
							<div><jdoc:include type="message" /></div>
							<div id="component"><jdoc:include type="component" /></div>
							
						</div>

					<?php if ($right): ?>
						<div class="sidebar-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<jdoc:include type="modules" name="SidebarRight" style="xhtml" />
						</div>
					<?php endif; ?>
			    </div>

				<?php if ($this->countModules('ContentBottom1') || $this->countModules('position-7') || $this->countModules('ContentBottom2') || $this->countModules('position-8')): ?>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<jdoc:include type="modules" name="ContentBottom1" style="xhtml" />
							<jdoc:include type="modules" name="position-7" style="xhtml" />
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<jdoc:include type="modules" name="ContentBottom2" style="xhtml" />
							<jdoc:include type="modules" name="position-8" style="xhtml" />
						</div>
					</div>
				<?php endif; ?>

			</div> <!--globalContent-->

		    <?php if ($this->countModules('Bottom1') || $this->countModules('position-9') || $this->countModules('Bottom2') || $this->countModules('position-10') || $this->countModules('Bottom3') || $this->countModules('position-11') || $this->countModules('Bottom4') || $this->countModules('position-12')): ?>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<jdoc:include type="modules" name="Bottom1" style="xhtml" />
					<jdoc:include type="modules" name="position-9" style="xhtml" />
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<jdoc:include type="modules" name="Bottom2" style="xhtml" />
					<jdoc:include type="modules" name="position-10" style="xhtml" />
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<jdoc:include type="modules" name="Bottom3" style="xhtml" />
					<jdoc:include type="modules" name="position-11" style="xhtml" />
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<jdoc:include type="modules" name="Bottom4" style="xhtml" />
				</div>
			</div>
		    <?php endif; ?>
		</div> <!--wrapper-->

		<?php if ($this->countModules('position-12') || $this->countModules('position-13') || $this->countModules('position-14')): ?>
			<div class="bg_blog">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<jdoc:include type="modules" name="position-12" style="xhtml" />
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<jdoc:include type="modules" name="position-13" style="xhtml" />
						</div>
					</div>
				</div>
			</div>	
		<?php endif; ?>

		<?php if ($this->countModules('position-14')): ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="slr"><jdoc:include type="modules" name="position-14" style="xhtml" /></div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div id="footer">
		    <div class="container">
				<?php if ($this->countModules('footerMenu')): ?>
				    <div class="row">
						<div class="footer_menu">
							<nav id="site-navigation-footer" class="navbar" role="navigation">
								<div class="navbar-header">
							      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-navbar-collapse">
							        <i class="fa fa-bars"></i>
							      </button>
							    </div>
								<div id="footer-navbar-collapse" class="collapse navbar-collapse">
									<jdoc:include type="modules" name="footerMenu" style="xhtml" />
								</div>
							</nav><!-- #site-navigation -->
						</div>
				    </div>
				<?php endif; ?>

				<?php if ($this->countModules('Footer1') || $this->countModules('Footer2') || $this->countModules('Footer3') || $this->countModules('Footer4')): ?>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<jdoc:include type="modules" name="Footer1" style="xhtml" />
							<jdoc:include type="modules" name="Footer4" style="xhtml" />
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<jdoc:include type="modules" name="Footer2" style="xhtml" />
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<jdoc:include type="modules" name="Footer3" style="xhtml" />
						</div>
					</div>
				<?php endif; ?>


				<?php if ($this->countModules('debug')): ?>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<jdoc:include type="modules" name="debug" style="xhtml" />
						</div>
					</div>
				<?php endif; ?>
		    </div> 
		</div> <!--id footer-->
			<div class="container">
				<div class="row">
					<div class="copyrights col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?php echo $copyrights; ?>
					</div>
					<div class="soc_icons_box col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<ul class="soc_icons" >
							<?php foreach($soc as $key => $value) {
								if ($value != null) { ?>
									<li>
										<a href="<?php echo $value ?>" class="fa <?php echo $key ?>" target="_blank" rel="nofollow"></a>
									</li>
							<?php } } ?>
						</ul>
					</div>
				</div>
			</div>	
	</body>
</html>