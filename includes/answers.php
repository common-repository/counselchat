<?php if (get_option('profile_id')) { ?>
  <div class="counselchat-answers">
    <iframe <?php if (!empty($atts['height'])) { echo "height=" . $atts["height"]; } ?> <?php if (!empty($atts["width"])) { echo "width=" . $atts["width"]; } ?> style="border: 1px solid #eee;" src="https://counselchat.com/widget/answers?pid=<?php echo get_option('profile_id'); ?>"></iframe>
  </div>
<?php } ?>