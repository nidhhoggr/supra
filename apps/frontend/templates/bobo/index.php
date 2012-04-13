<!DOCTYPE html>
<html lang="en">	
    <head>		
        <meta charset="utf-8">
        <title>[ADD PAGE TITLE]</title>
        <link rel="stylesheet" href="/css/bogo/style.css" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE 6]>
            <link rel="stylesheet" href="/css/bogo/ie6.css" />
        <![endif]--> 
        <!--[if IE 7]>
            <link rel="stylesheet" href="/css/bogo/ie7.css" />
        <![endif]-->
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>	
        <div id="wrap">
            <div id="header">
                <a href="#" title="[ADD LINK TITLE]"><h1>OpenGroomer</h1></a>       	
                <h2>Grooming Reservations - Instantly Confirmed</h2>           	
            	<div id="nav">
                    <ul id="nav-pages"> 
                        <li><a href="index.html" class="current">Home</a><span>/</span></li>
                        <li><a href="services.html">Services</a><span>/</span></li>
                        <li><a href="portfolio.html">Portfolio</a><span>/</span></li>
                        <li><a href="blog.html">Blog</a><span>/</span></li>
                        <li><a href="contact.html">Contact</a></li>	
            	    </ul><!--end nav-pages-->
            	</div><!--end nav-->
            </div><!--end header-->
            <div id="frontpage-content">      
    			
    			<div id="frontpage-intro">    	
    				
    				<p>[ADD BRIEF INTRODUCTION]</p>    	
    				
    			</div><!--end frontpage-info-->    	
    	
    			<div id="featured-projects">   	
				
					<h3>Getting Started</h3>
				    				 		
    				<div id="featured-projects-bg">   		


                                    <?php echo $sf_content ?>
<!--
    					<a href="[ADD LINK TO PROJECT PAGE]" title="[ADD LINK TITLE]"><img class="featured-project-image" src="images/[ADD IMAGE FILE NAME]" alt="[ADD ALTERNATIVE TEXT]" /></a>
    					<a href="[ADD LINK TO PROJECT PAGE]" title="[ADD LINK TITLE]"><img class="featured-project-image" src="images/[ADD IMAGE FILE NAME]" alt="[ADD ALTERNATIVE TEXT]" /></a>
-->    				
    				</div><!--end featured-projects-bg-->  
    				 	
    			</div><!--end featured-projects--> 
    			    			
    		</div><!--end frontpage-content--> 
    		
    		<div id="footer">
				
				<p class="copyright">Copyright &copy; 2012 &middot; [ADD COMPANY NAME] &middot; All Rights Reserved</p>
				   
                </div><!--end footer-->
            
    	</div><!--end wrap-->	
    	
	</body>	
	
</html>
