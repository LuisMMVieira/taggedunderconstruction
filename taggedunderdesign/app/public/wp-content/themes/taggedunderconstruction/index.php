<?php get_header(); ?>

      <div class="row">

        <div class="site-main">

          <?php 
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        
            get_template_part( 'content', get_post_format() );
      
          endwhile; endif;           
          ?>

          <nav>
            <ul class="pager">
              <li><?php next_posts_link( 'Previous' ); ?></li>
              <li><?php previous_posts_link( 'Next' ); ?></li>
            </ul>
          </nav>

        </div> <!-- /.site-main -->

      </div> <!-- /.row -->

  <?php wp_footer(); ?>


