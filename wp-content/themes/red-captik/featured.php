<div id="featured">

 <ul id="featured-posts">
	<?php $popular = new WP_Query('orderby=comment_count&posts_per_page=3'); while ($popular->have_posts()) : $popular->the_post();?>
        <li class="item-1">
      
          <a href="<?php the_permalink(); ?>">
            <span class="image-roll"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php getImage('1'); ?>&w=270&h=125&zc=1" class="post_popular" ><em>&nbsp;</em></span>
          </a>
        
        </li>
<?php endwhile; ?>
       </ul>      


</div>