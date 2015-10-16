<?php

/*
Template Name: Home
*/

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sam Lindstrom</title>
  <meta name="description" content="Sam Lindstrom's personal portfolio website">
  
  <!--[if IE]><link rel="shortcut icon" href=""<?php echo get_template_directory_uri(); ?>/images/favicon.ico"><![endif]-->

  <!-- Touch Icons - iOS and Android 2.1+ 152x152 pixels in size. --> 
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png">

  <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 96x96 pixels in size. -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
  
  <!-- MS favicon --> 
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/mstile-144x144.png">
    
  <!-- Primary Stylesheet and Responsive CSS  --> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" media="screen and (min-width: 320px)" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font-Awesome --> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css"> 
   
  <!-- JS & jQuery libraries --> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.dropdown.js"></script>
    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
  
</head>

<nav>
  <div class="logo"><a href="#landing-page">Sam Lindstrom!</a></div>
  <div class="drop-icon"><a href="#">Menu</a></div>
  <ul class="mobile-nav">
    <li><a href="#about">ABOUT</a></li>
    <li><a href="#skills">SKILLS</a></li>
    <li><a href="#work">WORK</a></li>
    <li><a href="#contact">CONTACT</a></li>
  </ul>
</nav>


<body>
  
  <div id="landing-page">
    <h1>DEVELOPER, WANNABE DESIGNER</h1>
    <p>MY NAME'S SAM</p>  
    <div class="proceed-arrow"><a href="#about">Learn more about me!</a></div>
  </div>

  <div id="about">
    <div id="about-content">
      
      <h2>A LITTLE ABOUT ME</h2>
        
      <?php 
      $id=6; 
      $post = get_post($id); 
      $content = apply_filters('the_content', $post->post_content); 
      echo $content;  
      ?>
        
    </div>
  </div>
  
  
  <div id="skills">
    <div id="skills-content">
      
      <h2>MY SKILLS</h2>
        
      <div id="skills-backend">
        <?php 
        $id=8; 
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;  
        ?>
      </div>
      
      <div id="skills-frontend">
        <?php 
        $id=20; 
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;  
        ?>
      </div>
      
      <div id="skills-business">
        <?php 
        $id=22; 
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;  
        ?>
      </div>

     <div id="process">
        <h2>MY PROCESS</h2>
        <?php 
        $id=48; 
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;  
        ?>
     </div>

    </div>
  </div>
  
  <div id="work">
    <div id="work-content">
      
      <h2>CHECK OUT MY WORK</h2>
      
      <ul>
        <li>
          <div id="project1" class="project">
            <a href="#openModal-p1">
              <div data-content="GRUPL IT" class="preview">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gruplit-preview.jpg" alt="GruplIt" class="preview-img"</img>
              </div>
            </a>
            <div id="openModal-p1" class="modal-window">
              <div>
                <div class="img-wrapper">
          		    <a href="#close" title="Close" class="close"><span class="fa fa-times"><span></a>
                  <a href="http://decision-maker-app.herokuapp.com/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gruplit-screen.jpg" alt="GruplIt" </img>
                  </a>
                </div>
                <h2>Grupl It</h2>
                <p>An app built to help friends decide upon a night out on the town. My partner handled a bulk of the back-end programming, and I implemented most of the front-end design using Sass to pre-process stylesheets. The Javascript and jQuery were collaborative efforts, along with the mobile adaptive user interface. Feel free to check out the project's <a href="https://github.com/slamflipstrom/decision-maker-app" target="_blank">Github repository</a>. Languages: Ruby on Rails, CSS, SASS, HTML, Javascript, and jQuery.</p>
              </div>
            </div>
          </div>
        </li><!--
     --><li>
          <div id="project2" class="project">
            <a href="#openModal-p2">  
              <div data-content="TASKMATE" class="preview">
                <img src="<?php echo get_template_directory_uri(); ?>/images/taskmate-preview.jpg" alt="TaskMate" class="preview-img"</img>
              </div>
            </a>
            <div id="openModal-p2" class="modal-window">
                <div class="img-wrapper">
          		    <a href="#close" title="Close" class="close"><span class="fa fa-times"><span></a>
                  <a href="http://protected-wave-4969.herokuapp.com/tasks" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/taskmate-screen.jpg" alt="TaskMate" </img>
                  </a>
                </div>
                <h2>TaskMate</h2>
                <p>A pair programmed task manager application. My partner and I were entrusted with the back-end development for this project, working solely with Ruby on Rails. The front end design was evolving simultaneously, so we had to adapt to handle an ever-changing codebase. Here is the project's <a href="https://github.com/slamflipstrom/task-project" target="_blank">Github repository</a>. Languages: Ruby on Rails, 	CSS, 	HTML, Javascript, and jQuery.</p>
            </div>
          </div>
        </li><!--
     --><li>
          <div id="project3" class="project">  
            <a href="#openModal-p3">  
              <div data-content="GRANT TRACKER" class="preview">
                <img src="<?php echo get_template_directory_uri(); ?>/images/granttracker-preview.jpg" alt="GrantTracker" class="preview-img"</img>
              </div> 
            </a>
            <div id="openModal-p3" class="modal-window">
              <div>
                <div class="img-wrapper">
          	  	  <a href="#close" title="Close" class="close"><span class="fa fa-times"><span></a>
                  <a href="http://grant-tracker.herokuapp.com/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/granttracker-screen.jpg" alt="GruplIt" </img>
                  </a>
                </div>  
                <h2>Grant Tracker</h2>
                <p>An app built for non-profit organizations that frequently apply for grants. It’s primary function is to assist the NPO in completing the application process. The app was pair-programmed, with my group working on the back-end code exclusively. If you'd like to get a closer look at the code, check out the <a href="https://github.com/slamflipstrom/grant-tracker" target="_blank">Github repository</a>. Languages: Ruby on Rails, CSS, HTML, Javascript, and jQuery.</p>  
              </div>
            </div>
          </div> 
        </li>
      </ul>
      
    </div>
  </div>
  
  <div id="links">
    <div id="links-content">
      
      <h2>LOOK ME UP</h2>
      
      <div class="social-media-links">
        <ul>
          <li class="linked-in"><a href="https://linkedin.com/in/samlindstrom/" target="_blank"><span class="fa fa-linkedin-square fa-3x"><span></a></li>
          <li class="instagram"><a href="http://instagram.com/ssssssammmm" target="_blank"><span class="fa fa-instagram fa-3x"><span></a></li>
          <li class="github"><a href="https://github.com/slamflipstrom" target="_blank"><span class="fa fa-github fa-3x"><span></a></li>
          <li class="twitter"><a href="https://twitter.com/ssssssammmm" target="_blank"><span class="fa fa-twitter fa-3x"><span></a></li>    
        </ul>
      </div>
      <p> Check out the above links to see more of my work, and what I've been up to.</p>
      
    </div>
  </div>
  
  <div id="contact">
    <div id="contact-content">
      
      <h2>GET IN TOUCH</h2>
      
      <?php 
      $id=10; 
      $post = get_post($id); 
      $content = apply_filters('the_content', $post->post_content); 
      echo $content;  
      ?>
      
    </div>
  </div>
  
  <div id="footer">
    <div class="small-logo"><a href="#landing-page">Sam Lindstrom</a></div>
    <h4>This responsive site was custom-built with HTML, CSS, & jQuery</h4>
  </div>
  
</body>
</html>