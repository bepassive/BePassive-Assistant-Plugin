<?php 


/*================================================
=============== Disable feeds =====================
==================================================*/
/* Redirect to the homepage all users trying to access feeds.*/
function bePassive_disable_feed() {
   wp_redirect( home_url() );
   exit;
}

add_action('do_feed', 'bePassive_disable_feed', 1);
add_action('do_feed_rdf', 'bePassive_disable_feed', 1);
add_action('do_feed_rss', 'bePassive_disable_feed', 1);
add_action('do_feed_rss2', 'bePassive_disable_feed', 1);
add_action('do_feed_atom', 'bePassive_disable_feed', 1);
add_action('do_feed_rss2_comments', 'bePassive_disable_feed', 1);
add_action('do_feed_atom_comments', 'bePassive_disable_feed', 1);

