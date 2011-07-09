<section id="content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  	<article>
  		<?php if ( has_post_thumbnail() ) : ?>
  		<figure class="post-thumbnail">
  		  <?php the_post_thumbnail(); ?>
  		  <figcaption>Current post thumbnail</figcaption>
  		</figure>
  		<?php endif; ?>
  	
  		<header>
  			<h1><?php the_title(); ?></h1>
  		</header>
			
  		<?php the_content(); ?>  

  	</article>
  
  <?php endwhile; endif;?>

</section>