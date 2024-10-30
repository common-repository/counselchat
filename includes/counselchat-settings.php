<div class="wrap">
  <h2>CounselChat Settings</h2>
  <form name="udtest_form" method="post" action="options.php">
    Don't have an account? If you're a counselor or therapist, you can register for a free account <a href="https://counselchat.com/for-therapists/sign-up">here</a>.
    <?php settings_fields('counselchat-settings'); ?>
    <?php do_settings_sections('counselchat-settings'); ?>
    <table class="form-table">
      <tr valign="top">
      <th scope="row">
        Profile ID:
        <br>

      </th>
      <td>
        <input type="text" name="profile_id" value="<?php echo get_option('profile_id'); ?>"/>
        <br>
        <small>Find your ID <a href='https://counselchat.com/pro/wordpress'>here</a></small>
      </td>
      </tr>
    </table>

    <?php submit_button(); ?>

  </form>
</div>