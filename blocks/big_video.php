<section class="big-video">
  <?php 
    $video_image = 'background-image: url('.get_field('video_img').')';
    if (!get_field('video_img')) {
      $video_image = '';
    }
    $video_link = get_field('video_link'); 
    if (get_field('video_toggle') == true) {
      $video_link = get_field('video_file'); 
    }
  ?>
  <div class="wrap video-data" data-src="<?php echo $video_link; ?>" style="<?php echo $video_image; ?>">
    <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="56" viewBox="0 0 50 56" fill="none">
        <path d="M47 22.8039C51 25.1133 51 30.8868 47 33.1962L9.49999 54.8468C5.49999 57.1562 0.499997 54.2694 0.499997 49.6506L0.499999 6.34935C0.5 1.73055 5.5 -1.15619 9.5 1.15321L47 22.8039Z" fill="white"/>
      </svg>
    </div>
  </div>
</section>