<?php 
	global $current_page;
	$title = "Woolford and Associates";
	switch($current_page) {
		case 'coaching':
			$title = 'What is Coaching? - Woolford and Associates';
			break;
		case 'resources':
			$title = 'Resources - Woolford and Associates';
			break;
		case 'services':
			$title = 'Services - Woolford and Associates';
			break;
		case 'testimonials':
			$title = 'Testimonials - Woolford and Associates';
			break;
		case 'strategic-partners':
			$title = 'Strategic Partners - Woolford and Associates';
			break;
		case 'contact-us':
			$title = 'Contact Us - Woolford and Associates';
			break;
		case 'bio':
			$title = 'Bio - Woolford and Associates';
			break;
				
	}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
		  (function(d) {
		    var config = {
		      kitId: 'qmf0fyx',
		      scriptTimeout: 3000
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		
		
		<!-- <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="body-wrap">

            <div id="header" class="header-container container">

                <div class="wrapper ">

                    <div class="logo">

                       <a href="/index.php" ><img src="imgs/logo.svg" alt=""></a>

                    </div> <!-- end .logo -->

                    <div id="nav">
                    <a id="dropdown" href="#">menu</a>
                        <ul>
                            <li><a href="/index.php"<?php if ($current_page == 'home') echo " class='active'"; ?>>Home</a></li>
                            <li><a href="/coaching.php" <?php if ($current_page == 'coaching') echo " class='active'"; ?>>What is Coaching?</a></li>
                            <li><a href="/services.php" <?php if ($current_page == 'services') echo " class='active'"; ?>>Services</a></li>
                            <li><a href="/bio.php" <?php if ($current_page == 'bio') echo " class='active'"; ?> >Bio</a></li>
                             <li><a style="padding-left: 0; padding-right: 0; margin-left: auto; margin-right: auto;" href="/testimonials.php"<?php if ($current_page == 'testimonials') echo " class='active'"; ?>>Testimonials</a></li>
                             <li><a href="/strategic-partners.php"<?php if ($current_page == 'strategic-partners') echo " class='active'"; ?>>Strategic Partners</a></li>
                            <li><a href="/resources.php"<?php if ($current_page == 'resources') echo " class='active'"; ?>>Resources</a></li>
                            <li><a href="/contact-us.php"<?php if ($current_page == 'contact-us') echo " class='active'"; ?>>Contact Us</a></li>
                        </ul>

                    </div> <!-- end #nav -->

                </div> <!-- end wrapper -->

            </div> <!-- end header -->