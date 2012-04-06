<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Jobeet - Your best job board</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1>
              <a href="<?php echo url_for('job/index') ?>">
              <img src="/images/logo.jpg" alt="Supraliminal Web Solutions" />
              </a>
          </h1>
          <div id="sub_header">
            <div class="post">
              <h2>Create A Bug</h2>
              <div>
                <a href="<?php echo url_for('bug/new') ?>">Create A Bug</a>
              </div>
            </div>

            <div class="search">
              <h2>Check A Bug</h2>
              <form action="" method="get">
                <input type="text" name="keywords"
                  id="search_keywords" />
                <input type="submit" value="search" />
                <div class="help">
                   enter the reference number of a bug
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="nav">
          <?php
          if($sf_user->isAuthenticated()) {
              if($sf_user->isStaff()) 
                  include_partial('staff/staffnav');    
          }
          ?>
      </div> 
      <div id="content">
        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif ?>
 
        <div class="content">
          <?php echo $sf_content ?>
        </div>
      </div>
 
      <div id="footer">
        <div class="content">
          <span class="symfony">
            <img src="/images/jobeet-mini.png" />
            powered by <a href="http://www.symfony-project.org/">
            <img src="/images/symfony.gif" alt="symfony framework" />
            </a>
          </span>
          <ul>
            <li><a href="">Link 1</a></li>
            <li class="feed"><a href="">Link 2</a></li>
            <li><a href="">Link 3</a></li>
            <li class="last"><a href="">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
