<?php if (get_option('profile_id')) { ?>
  <div class="counselchat-ask">
    <iframe style="border: none; margin-bottom: 2px;" src="https://counselchat.com/widget/ask?pid=<?php echo get_option('profile_id'); ?>" <?php if (!empty($atts['height'])) { echo "height=" . $atts['height']; } ?> <?php if (!empty($atts['width'])) { echo "width=" . $atts['width']; } ?>></iframe>
    <div class='powered-by-link'>
      <a class='powered-by-link' href="https://counselchat.com/therapists/<?php echo get_option('profile_id'); ?>" target="_blank">
        Powered By CounselChat
      </a>
    </div>
  </div>
<?php } ?>