<!DOCTYPE html>
<html lang="en">	
    <head>		
        <meta charset="utf-8">
        <title>SuperAccountant</title>
        <link rel="stylesheet" href="/css/bobo/style.css" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE 6]>
            <link rel="stylesheet" href="/css/bobo/ie6.css" />
        <![endif]--> 
        <!--[if IE 7]>
            <link rel="stylesheet" href="/css/bobo/ie7.css" />
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
                <a href="#" title="[ADD LINK TITLE]">
                    <img src="/images/logo.png" />
                </a>       	
                <h2>Super Accountant - Painless Automation</h2>           	
                <div id="nav">
                    <ul id="nav-pages">
                    <?php
                    //include the menu respective to the nav
                    $page = sfContext::getInstance()->getModuleName();
                    $user_type = $sf_user->getUserType();
                    $user_types = array('client','staff');
                    foreach($user_types as $ut) {
                        if($user_type == $ut) {
                            include_partial($ut.'/nav',array('page'=>$page,'user_type'=>$user_type));
                            break;
                        }
                    }
                    ?>
                    </ul><!--end nav-pages-->
                </div><!--end nav-->
            </div><!--end header-->
            <div id="frontpage-content">      
    			
    			<div id="frontpage-intro">    	
    				
    				<p>[ADD BRIEF INTRODUCTION]</p>    	
    				
    			</div><!--end frontpage-info-->    	
    	
    			<div id="frontpage-intro">   	
                                    <?php echo $sf_content ?>
<!--
    					<a href="[ADD LINK TO PROJECT PAGE]" title="[ADD LINK TITLE]"><img class="featured-project-image" src="images/[ADD IMAGE FILE NAME]" alt="[ADD ALTERNATIVE TEXT]" /></a>
    					<a href="[ADD LINK TO PROJECT PAGE]" title="[ADD LINK TITLE]"><img class="featured-project-image" src="images/[ADD IMAGE FILE NAME]" alt="[ADD ALTERNATIVE TEXT]" /></a>
-->    				
    				 	
    			</div><!--end featured-projects--> 
    			    			
    		</div><!--end frontpage-content--> 
    		
    		<div id="footer">
				
				<p class="copyright">Copyright &copy; 2012 &middot; SuperAccountant &middot; All Rights Reserved</p>
				   
                </div><!--end footer-->
            
    	</div><!--end wrap-->	
    	
	</body>	
	
</html>
