<?php
  if ( isset($atts['topic']) == TRUE && get_option('profile_id')) {
    ?>
      <div class='counselchat-badge' style='width: <?php echo $atts['width'] ?>; float: left; text-align: center;'>
        <a href="https://counselchat.com/topics/<?php echo $atts['topic'] ?>?expert=<?php echo get_option('profile_id'); ?>" target="_blank">
            <img src="https://counselchat.com/therapists/<?php echo get_option('profile_id'); ?>/badge/<?php echo $atts['topic']; ?>" alt="<?php echo $atts['topic'] ?> Therapists and Counselors" border="0" style="margin: 0; max-width: 100%;"></a>

        <a href="https://counselchat.com/therapists/<?php echo get_option('profile_id'); ?>" target="_blank">View My Profile</a>
      </div>
    <?php
  }
?>