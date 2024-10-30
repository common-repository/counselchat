=== Plugin Name ===
Contributors: counselchat
Donate link: https://counselchat.com/
Tags: therapists, counselors, widgets
Requires at least: 4.0
Tested up to: 4.5
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

CounselChat Badges and Answers - for Therapists and Counselors

== Description ==

Therapists and counselors - be rewarded for great clinical work. Demonstrate your expertise to clients and build your niche with CounselChat badges.

Your work with clients is private and confidential. However, this can make it difficult for prospective clients to understand how you can help.

Badges and Answers showcase your expertise and unique approach, on your own website. Each answer you write on CounselChat will be displayed through the Answers Widget.

Learn more about CounselChat [mental health expertise badges](https://counselchat.com/for-therapists/badges) and answers. A free CounselChat account is required - [sign up here](https://counselchat.com/for-therapists/sign-up).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/counselchat` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate CounselChat through the 'Plugins' screen in WordPress
3. Configure the CounselChat Profile ID the Settings -> CounselChat screen. You can use `559d6255802d1b094c9437d9` while testing (this is the ID of one of the CounselChat co-founders, Eric)

There are three components: [counselchat_badge], [counselchat_answers] and [counselchat_ask]. They work in a Page, Post or Text Widget. Insert the tag where you want the corresponding component to display.

= Badges =
`[counselchat_badge topic="TOPIC_NAME"]`

topic is required. Find the TOPIC_NAME through your [badges](https://counselchat.com/pro/badges) page. For testing purposes, you can use `anxiety` or `relationships`.

Configure the width by setting the width attribute, e.g. [counselchat_badge width="500px"] or [counselchat_badge width="50%"]

= Answers =
`[counselchat_answers]`

Configure the width by setting the width attribute, e.g. [counselchat_answers width="500px"] or [counselchat_answers width="100%"]

= Ask =
`[counselchat_ask]`

Configure the height by setting the height attribute, e.g. [counselchat_ask height="200px"]

== Screenshots ==

1. Answers
2. Ask and Badges

== Changelog ==

= 1.0 =
* Initial version
