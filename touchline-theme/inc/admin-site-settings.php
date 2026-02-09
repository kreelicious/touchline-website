<?php
/**
 * Admin Site Settings page and Settings API registration.
 */

if (!function_exists('touchline_register_site_settings')) {
	/**
	 * Register settings, sections, and fields.
	 *
	 * @return void
	 */
	function touchline_register_site_settings() {
		register_setting(
			'touchline_site_settings',
			'touchline_site_settings',
			array(
				'sanitize_callback' => 'touchline_sanitize_site_settings',
				'default'           => array(),
			)
		);

		add_settings_section(
			'touchline_site_settings_section',
			__('Site Settings', 'touchline-theme'),
			'__return_false',
			'touchline_site_settings'
		);

		$fields = array(
			'company_name'     => __('Company Name', 'touchline-theme'),
			'phone'            => __('Phone', 'touchline-theme'),
			'email'            => __('Email', 'touchline-theme'),
			'address'          => __('Address', 'touchline-theme'),
			'opening_hours'    => __('Opening Hours', 'touchline-theme'),
			'default_cta_text' => __('Default CTA Text', 'touchline-theme'),
			'default_cta_url'  => __('Default CTA URL', 'touchline-theme'),
			'social_links'     => __('Social Links (JSON)', 'touchline-theme'),
		);

		foreach ($fields as $field_key => $label) {
			add_settings_field(
				$field_key,
				$label,
				'touchline_render_site_settings_field',
				'touchline_site_settings',
				'touchline_site_settings_section',
				array(
					'key' => $field_key,
				)
			);
		}
	}
	add_action('admin_init', 'touchline_register_site_settings');
}

if (!function_exists('touchline_add_site_settings_menu')) {
	/**
	 * Register the Site Settings menu.
	 *
	 * @return void
	 */
	function touchline_add_site_settings_menu() {
		add_menu_page(
			__('Site Settings', 'touchline-theme'),
			__('Site Settings', 'touchline-theme'),
			'manage_options',
			'touchline-site-settings',
			'touchline_render_site_settings_page',
			'dashicons-admin-generic',
			60
		);
	}
	add_action('admin_menu', 'touchline_add_site_settings_menu');
}

if (!function_exists('touchline_render_site_settings_page')) {
	/**
	 * Render the Site Settings admin page.
	 *
	 * @return void
	 */
	function touchline_render_site_settings_page() {
		?>
		<div class="wrap">
			<h1><?php esc_html_e('Site Settings', 'touchline-theme'); ?></h1>
			<form action="options.php" method="post">
				<?php
				settings_fields('touchline_site_settings');
				do_settings_sections('touchline_site_settings');
				submit_button();
				?>
			</form>
		</div>
		<?php
	}
}

if (!function_exists('touchline_render_site_settings_field')) {
	/**
	 * Render a settings field based on key.
	 *
	 * @param array $args Field arguments.
	 * @return void
	 */
	function touchline_render_site_settings_field($args) {
		$key     = isset($args['key']) ? $args['key'] : '';
		$options = get_option('touchline_site_settings', array());
		$value   = isset($options[$key]) ? $options[$key] : '';

		$field_name = sprintf('touchline_site_settings[%s]', esc_attr($key));

		switch ($key) {
			case 'address':
				printf(
					'<textarea class="large-text" rows="4" name="%1$s" id="%2$s">%3$s</textarea>',
					esc_attr($field_name),
					esc_attr($key),
					esc_textarea((string) $value)
				);
				break;
			case 'social_links':
				printf(
					'<textarea class="large-text code" rows="6" name="%1$s" id="%2$s">%3$s</textarea>',
					esc_attr($field_name),
					esc_attr($key),
					esc_textarea((string) $value)
				);
				echo '<p class="description">';
				esc_html_e('Expected format: JSON array of objects with "label" and "url" properties.', 'touchline-theme');
				echo '</p>';
				echo '<p class="description"><code>';
				echo esc_html(
					wp_json_encode(
						array(
							array(
								'label' => 'LinkedIn',
								'url'   => 'https://www.linkedin.com/company/example',
							),
						),
						JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
					)
				);
				echo '</code></p>';
				break;
			case 'email':
				printf(
					'<input type="email" class="regular-text" name="%1$s" id="%2$s" value="%3$s" />',
					esc_attr($field_name),
					esc_attr($key),
					esc_attr((string) $value)
				);
				break;
			case 'default_cta_url':
				printf(
					'<input type="url" class="regular-text" name="%1$s" id="%2$s" value="%3$s" />',
					esc_attr($field_name),
					esc_attr($key),
					esc_attr((string) $value)
				);
				break;
			default:
				printf(
					'<input type="text" class="regular-text" name="%1$s" id="%2$s" value="%3$s" />',
					esc_attr($field_name),
					esc_attr($key),
					esc_attr((string) $value)
				);
				break;
		}

		if ('company_name' === $key) {
			echo '<p class="description">';
			esc_html_e('Required.', 'touchline-theme');
			echo '</p>';
		}
	}
}

if (!function_exists('touchline_sanitize_site_settings')) {
	/**
	 * Sanitize settings input.
	 *
	 * @param array $input Raw input.
	 * @return array
	 */
	function touchline_sanitize_site_settings($input) {
		$input = is_array($input) ? $input : array();

		$existing = get_option('touchline_site_settings', array());
		$output   = array();

		$company_name = isset($input['company_name']) ? sanitize_text_field($input['company_name']) : '';
		if ('' === $company_name) {
			add_settings_error(
				'touchline_site_settings',
				'touchline_company_name_required',
				__('Company name is required.', 'touchline-theme'),
				'error'
			);
			if (isset($existing['company_name'])) {
				$company_name = $existing['company_name'];
			}
		}
		$output['company_name'] = $company_name;

		$output['phone']            = isset($input['phone']) ? sanitize_text_field($input['phone']) : '';
		$output['opening_hours']    = isset($input['opening_hours']) ? sanitize_text_field($input['opening_hours']) : '';
		$output['default_cta_text'] = isset($input['default_cta_text']) ? sanitize_text_field($input['default_cta_text']) : '';
		$output['email']            = isset($input['email']) ? sanitize_email($input['email']) : '';
		$output['default_cta_url']  = isset($input['default_cta_url']) ? esc_url_raw($input['default_cta_url']) : '';
		$output['address']          = isset($input['address']) ? sanitize_textarea_field($input['address']) : '';

		$social_links_raw = isset($input['social_links']) ? wp_unslash($input['social_links']) : '';
		if ('' !== $social_links_raw) {
			$decoded = json_decode($social_links_raw, true);
			if (is_array($decoded)) {
				$sanitized_links = array();
				foreach ($decoded as $item) {
					if (!is_array($item)) {
						continue;
					}
					$label = isset($item['label']) ? sanitize_text_field($item['label']) : '';
					$url   = isset($item['url']) ? esc_url_raw($item['url']) : '';
					if ('' === $label && '' === $url) {
						continue;
					}
					$sanitized_links[] = array(
						'label' => $label,
						'url'   => $url,
					);
				}
				$output['social_links'] = wp_json_encode(
					$sanitized_links,
					JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
				);
			} else {
				add_settings_error(
					'touchline_site_settings',
					'touchline_social_links_invalid',
					__('Social links must be a valid JSON array.', 'touchline-theme'),
					'error'
				);
				$output['social_links'] = isset($existing['social_links']) ? $existing['social_links'] : '';
			}
		} else {
			$output['social_links'] = '';
		}

		return $output;
	}
}
