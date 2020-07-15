
<?php get_header(); ?>
<?php while (have_posts()):
  the_post();
  $maincolor = get_field('main_bg_color');
  $appimage = get_field('app_image');
  ?>
<div class="left-side" style="color:<?php echo $maincolor;?>">
        <h2 style="color:<?php echo $maincolor;?>"><a style="color:<?php echo $maincolor;?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p style="color:<?php echo $maincolor;?>"><?php the_content(); ?></p>
        <div id="privacy-policy-area" style="background:<?php echo $maincolor; ?>">
        <h4>Privacy Policy</h4>
        <p id="privacy-policy-area-text">Click to open</p>
        </div>
        <div id="privacy-policy-body">
          <?php echo get_field('privacy_policy') ?>
        </div>
       <p class="footer-text"><?php echo get_field('footer_text'); ?></p>
      </div>
      <div class="divider" style="background-color:<?php echo $maincolor ?>">
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <img src="<?php echo $appimage['url'];?>" alt="<?php echo $appimage['alt']; ?>" class="app-image" />
        <div class="download-buttons">
          <?php if (get_field('android_download_link')):?>
            <a href="<?php echo get_field('android_download_link'); ?>" target="_blank">
            <img
            src="<?php echo get_template_directory_uri() . '/img/playbadge.png'; ?>"
            alt="Download for Android"
            class="download-button"
          /></a>
          <?php endif; ?>
          <?php if (get_field('apple_download_link')):?>
            <a href="<?php echo get_field('apple'); ?>" target="_blank">
            <img
            src="<?php echo get_template_directory_uri() . '/img/appstorebadge.png'; ?>"
            alt="Download for Apple"
            class="download-button"
          /></a>
          <?php endif; ?>
          
         
        </div>
      </div>
<?php endwhile; ?>
      <?php get_footer(); ?>
