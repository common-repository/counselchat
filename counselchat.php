<?php
/*
  Plugin Name: CounselChat
  Plugin URI: https://counselchat.com/
  Description: CounselChat helps people find great mental health counselors and therapists. This plugin lets counselors demonstrate their expertise and approach through <a href='https://counselchat.com/for-therapists/badges'>badges</a> and <a href='https://counselchat.com/for-therapists/sign-up'>answers</a>. A free CounselChat account is required - <a href='https://counselchat.com/for-therapists/sign-up'>sign up here</a>.
  Version: 1.0
  Author: Philip Lee
  Author URI: https://counselchat.com
  License: GPLv2 or later
  Text Domain: counselchat
*/

if (is_admin()) {
  add_action('admin_menu', 'counselchat_add_menu');
}

add_action('admin_init', 'counselchat_register_profile_id');
add_action('wp_enqueue_scripts', 'counselchat_add_css');
add_shortcode('counselchat_ask', 'counselchat_ask_widget');
add_shortcode('counselchat_answers', 'counselchat_answers_widget');
add_shortcode('counselchat_badge', 'counselchat_badge_widget');

add_filter('widget_text', 'counselchat_do_shortcodes');

function counselchat_do_shortcodes($content) {
  $pattern = get_shortcode_regex(array('counselchat_answers', 'counselchat_ask', 'counselchat_badge'));
  $content = preg_replace_callback("/$pattern/", 'do_shortcode_tag', $content);
  return $content;
}

function counselchat_register_profile_id() {
  register_setting('counselchat-settings', 'profile_id');
}

function counselchat_add_css() {
  wp_enqueue_style('counselchat-style', plugins_url('css/counselchat.css', __FILE__));
}

function counselchat_add_menu() {
  add_menu_page(
    'CounselChat',
    'CounselChat',
    'manage_options',
    'counselchat-settings',
    'counselchat_add_settings_menu',
    plugins_url('images/logo.png', __FILE__)
    ,'2.2.9'
  );
}

function counselchat_badge_widget($atts) {
  if (empty($atts["width"])) { $atts["width"] = "150"; }
  ob_start();
  include('includes/badge.php');
  return ob_get_clean();
}

function counselchat_ask_widget($atts) {
  ob_start();
  include('includes/ask.php');
  return ob_get_clean();
}

function counselchat_answers_widget($atts) {
  if (empty($atts["width"])) { $atts["width"] = "100%"; }
  ob_start();
  include('includes/answers.php');
  return ob_get_clean();
}

function counselchat_add_settings_menu() {
  include('includes/counselchat-settings.php');
}