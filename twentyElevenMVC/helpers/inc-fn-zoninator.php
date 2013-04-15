<?php
add_filter( 'zoninator_zone_max_lock_period', 'z_disable_zoninator_locks' );

function pot_add_zoninator_post_types () {

global $zoninator;

	$available_post_types = array_values(get_post_types(array('public' => true, '_builtin' => false), 'names'));
	$zoninator->default_post_types = array_merge(array('post', 'page'), $available_post_types);

}
add_action('zoninator_pre_init', 'pot_add_zoninator_post_types');
?>