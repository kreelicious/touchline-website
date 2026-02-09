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
