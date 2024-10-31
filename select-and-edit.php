<?php

/*
Plugin Name: Select and Edit
Plugin URI: http://www.zapo.tech/wp-plugins/select-and-edit
Description: Choose the Post or Page to edit next with less clicks & page loads! Select and Edit appears above the Publish box, expanding when hovered.
Version: 1.0
Author: zapotech
Author URI: http://www.zapo.tech
Text Domain: select-and-edit
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2012-2017 Zach L. Power (www.zapo.tech)
*/

function add_selectandedit_box() {

	$selectandedit_screens = array( 'post', 'page');
	add_meta_box("post_info", "Select and Edit", "selectandedit_box", $selectandedit_screens, "side", "high");

}

add_action( 'admin_menu', 'add_selectandedit_box' );

function load_selectandedit_admin_style($hook) {

    // Load only on 'post.php'
    if($hook != 'post.php') {
        return;
    }

    wp_enqueue_style( 'selectandedit_css', plugins_url('/select-and-edit.css', __FILE__ ) );

}

add_action( 'admin_enqueue_scripts', 'load_selectandedit_admin_style' );

function selectandedit_box() { ?>

	<div id="selectandedit-div">

		<div id="selectandedit-title">
			<strong>Select and Edit</strong>  <span class="selectandedit-plugin-author-credit"><em>by <a href="http://www.zapo.tech" title="Hello! Thanks for selecting Select and Edit!">zapotech</a></em></span>
		</div>

		<div class="selectandedit-counter selectandedit-counter-box-shadow">

			<div class="selectandedit-number-of-posts">
				<?php
					global $selectandedit_post_count;
					$selectandedit_post_count = count_user_posts( $user_id, $post_type = 'post');
					echo $selectandedit_post_count . ' Posts';
				?>
			</div>

			<div class="selectandedit-number-of-pages">
				<?php
					global $selectandedit_page_count; 
					$selectandedit_page_count = count_user_posts( $user_id, $post_type = 'page');
					echo $selectandedit_page_count . ' Pages';
				?>
			</div>

		</div>

		<div class="selectandedit-list-section selectandedit-section-box-shadow">

			<div class="selectandedit-list-title">
				<strong><em>Posts (<?php echo $selectandedit_post_count; ?>):</em></strong>
			</div>

			<div class="selectandedit-post-list">

				<?php $post_args = array(
					'numberposts'     => -1,
					'offset'          => 0,
					'orderby'         => 'post_date',
					'order'           => 'DESC',
					'post_type'       => 'post',
					'post_status'     => 'any',
					'suppress_filters' => true );
	
						$selectandedit_posts = get_posts($post_args);

						global $blog_home;
						$blog_home = home_url();

						foreach ( $selectandedit_posts as $selectandedit_post ) {
							$post_title_value = substr($selectandedit_post->post_title,0,26).'...';
							$post_link = '<a href="' . $blog_home . '/wp-admin/post.php?post=' . $selectandedit_post->ID . '&action=edit" title="' .$selectandedit_post->post_title.' (post ID: ' .$selectandedit_post->ID. ')" class="selectandedit-post-link">';
							if ( $selectandedit_post->post_status != 'publish' ) {
								$post_link .= '[' . $selectandedit_post->post_status . '] ';
							}

						$post_link .= $post_title_value;
						$post_link .= '</a>';
							echo '<span class="selectandedit-option">' .$post_link. '</span>';
						}

					wp_reset_query();

				?>

			</div>

		</div>

		<div class="selectandedit-list-section selectandedit-section-box-shadow">

			<div class="selectandedit-list-title">
				<strong><em>Pages (<?php echo $selectandedit_page_count; ?>):</em></strong>
			</div>

			<div class="selectandedit-page-list">

				<?php $page_args = array(
					'numberposts'     => -1,
					'offset'          => 0,
					'orderby'         => 'post_date',
					'order'           => 'DESC',
					'post_type'       => 'page',
					'post_status'     => 'any',
					'suppress_filters' => true );
	
						$selectandedit_pages = get_posts($page_args);

						foreach ( $selectandedit_pages as $selectandedit_page ) {
							$page_title_value = substr($selectandedit_page->post_title,0,26).'...';
							$page_link = '<a href="' . $blog_home . '/wp-admin/post.php?post=' . $selectandedit_page->ID . '&action=edit" title="' .$selectandedit_page->post_title.' (page ID: ' .$selectandedit_page->ID. ')" class="selectandedit-page-link">';

							if ( $selectandedit_page->post_status != 'publish' ) {
								$page_link .= '[' . $selectandedit_page->post_status . '] ';
							}

							$page_link .= $page_title_value;
							$page_link .= '</a>';

							echo '<span class="selectandedit-option">' .$page_link. '</span>';
						}

					wp_reset_query();

				?>

			</div>

		</div>

	</div>

<?php } ?>