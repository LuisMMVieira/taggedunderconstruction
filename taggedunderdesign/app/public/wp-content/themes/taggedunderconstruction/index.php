
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tagged Under Design by Luis Vieira</title>

  <!-- core CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
    </head>


    <!-- Start Content -->
    <body>

      <?php get_header(); ?>

        <div class="row">

          <div class="site-main">

            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          
              get_template_part( 'content', get_post_format() );
        
            endwhile; endif; 
            ?>

          </div> <!-- /.site-main -->

        </div> <!-- /.row -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <?php wp_footer(); ?>
  </body>
  </html>