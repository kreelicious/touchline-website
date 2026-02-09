<?php
/**
 * Theme helper functions.
 */

if (!function_exists('touchline_format_testimonial_attribution')) {
	/**
	 * Format testimonial attribution line.
	 *
	 * @param string $name    Name.
	 * @param string $role    Role/title.
	 * @param string $company Company.
	 * @return string
	 */
	function touchline_format_testimonial_attribution($name, $role = '', $company = '') {
		$name = trim((string) $name);
		$role = trim((string) $role);
		$company = trim((string) $company);

		$parts = array();

		if ('' !== $name) {
			$parts[] = $name;
		}

		$detail = '';
		if ('' !== $role && '' !== $company) {
			$detail = sprintf(
				/* translators: 1: role/title, 2: company */
				__('%1$s at %2$s', 'touchline-theme'),
				$role,
				$company
			);
		} elseif ('' !== $role) {
			$detail = $role;
		} elseif ('' !== $company) {
			$detail = $company;
		}

		if ('' !== $detail) {
			$parts[] = $detail;
		}

		return trim(implode(', ', $parts));
	}
}

if (!function_exists('touchline_get_setting')) {
	/**
	 * Get a site setting value.
	 *
	 * @param string $key     Setting key.
	 * @param mixed  $default Default value if missing.
	 * @return mixed
	 */
	function touchline_get_setting($key, $default = '') {
		$options = get_option('touchline_site_settings', array());

		if (is_array($options) && array_key_exists($key, $options)) {
			return $options[$key];
		}

		return $default;
	}
}

if (!function_exists('touchline_get_social_links')) {
	/**
	 * Get social links as an array.
	 *
	 * @return array
	 */
	function touchline_get_social_links() {
		$raw = touchline_get_setting('social_links', '');
		if ('' === $raw) {
			return array();
		}

		$decoded = json_decode($raw, true);
		if (!is_array($decoded)) {
			return array();
		}

		$links = array();
		foreach ($decoded as $item) {
			if (!is_array($item)) {
				continue;
			}
			$label = isset($item['label']) ? (string) $item['label'] : '';
			$url   = isset($item['url']) ? (string) $item['url'] : '';
			if ('' === $label && '' === $url) {
				continue;
			}
			$links[] = array(
				'label' => $label,
				'url'   => $url,
			);
		}

		return $links;
	}
}
