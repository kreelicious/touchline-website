<?php
/**
 * Testimonial custom post type.
 */

if (!function_exists('touchline_register_testimonial_cpt')) {
	/**
	 * Register the testimonial post type.
	 */
	function touchline_register_testimonial_cpt() {
		$labels = array(
			'name' => _x('Testimonials', 'post type general name', 'touchline-theme'),
			'singular_name' => _x('Testimonial', 'post type singular name', 'touchline-theme'),
			'menu_name' => _x('Testimonials', 'admin menu', 'touchline-theme'),
			'name_admin_bar' => _x('Testimonial', 'add new on admin bar', 'touchline-theme'),
			'add_new' => _x('Add New', 'testimonial', 'touchline-theme'),
			'add_new_item' => __('Add New Testimonial', 'touchline-theme'),
			'new_item' => __('New Testimonial', 'touchline-theme'),
			'edit_item' => __('Edit Testimonial', 'touchline-theme'),
			'view_item' => __('View Testimonial', 'touchline-theme'),
			'all_items' => __('All Testimonials', 'touchline-theme'),
			'search_items' => __('Search Testimonials', 'touchline-theme'),
			'not_found' => __('No testimonials found.', 'touchline-theme'),
			'not_found_in_trash' => __('No testimonials found in Trash.', 'touchline-theme'),
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
			'menu_icon' => 'dashicons-format-quote',
			'supports' => array('title', 'editor', 'thumbnail'),
			'show_in_rest' => true,
		);

		register_post_type('testimonial', $args);
	}
	add_action('init', 'touchline_register_testimonial_cpt');
}

if (!function_exists('touchline_add_testimonial_metabox')) {
	/**
	 * Register testimonial meta box.
	 */
	function touchline_add_testimonial_metabox() {
		add_meta_box(
			'touchline_testimonial_details',
			__('Testimonial Details', 'touchline-theme'),
			'touchline_render_testimonial_metabox',
			'testimonial',
			'normal',
			'default'
		);
	}
	add_action('add_meta_boxes', 'touchline_add_testimonial_metabox');
}

if (!function_exists('touchline_render_testimonial_metabox')) {
	/**
	 * Render testimonial meta box fields.
	 *
	 * @param WP_Post $post Post object.
	 */
	function touchline_render_testimonial_metabox($post) {
		wp_nonce_field('touchline_save_testimonial_meta', 'touchline_testimonial_meta_nonce');
		$role = get_post_meta($post->ID, 'tl_role', true);
		$company = get_post_meta($post->ID, 'tl_company', true);
		?>
		<p>
			<label for="tl_role"><strong><?php esc_html_e('Role / Title', 'touchline-theme'); ?></strong></label>
			<input class="widefat" id="tl_role" name="tl_role" type="text" value="<?php echo esc_attr($role); ?>" />
		</p>
		<p>
			<label for="tl_company"><strong><?php esc_html_e('Company', 'touchline-theme'); ?></strong></label>
			<input class="widefat" id="tl_company" name="tl_company" type="text" value="<?php echo esc_attr($company); ?>" />
		</p>
		<?php
	}
}

if (!function_exists('touchline_save_testimonial_meta')) {
	/**
	 * Save testimonial meta values.
	 *
	 * @param int $post_id Post ID.
	 */
	function touchline_save_testimonial_meta($post_id) {
		if (!isset($_POST['touchline_testimonial_meta_nonce'])) {
			return;
		}

		if (!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['touchline_testimonial_meta_nonce'])), 'touchline_save_testimonial_meta')) {
			return;
		}

		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return;
		}

		if (!current_user_can('edit_post', $post_id)) {
			return;
		}

		$fields = array('tl_role', 'tl_company');
		foreach ($fields as $field) {
			$value = '';
			if (isset($_POST[$field])) {
				$value = sanitize_text_field(wp_unslash($_POST[$field]));
			}

			if ('' === $value) {
				delete_post_meta($post_id, $field);
			} else {
				update_post_meta($post_id, $field, $value);
			}
		}
	}
	add_action('save_post_testimonial', 'touchline_save_testimonial_meta');
}
