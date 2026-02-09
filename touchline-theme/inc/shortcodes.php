<?php
/**
 * Shortcodes.
 */

if (!function_exists('touchline_testimonials_shortcode')) {
	/**
	 * Render testimonials shortcode.
	 *
	 * @param array $atts Shortcode attributes.
	 * @return string
	 */
	function touchline_testimonials_shortcode($atts) {
		$atts = shortcode_atts(
			array(
				'count' => 6,
			),
			$atts,
			'touchline_testimonials'
		);

		$count = (int) $atts['count'];
		if ($count < 1) {
			$count = 1;
		}
		if ($count > 50) {
			$count = 50;
		}

		$query = new WP_Query(
			array(
				'post_type' => 'testimonial',
				'posts_per_page' => $count,
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
			)
		);

		if (!$query->have_posts()) {
			return '<!-- No testimonials found. -->';
		}

		ob_start();
		?>
		<section class="tl-testimonials">
			<?php
			while ($query->have_posts()) :
				$query->the_post();
				$quote = trim(get_the_content());
				$name = get_the_title();
				$role = get_post_meta(get_the_ID(), 'tl_role', true);
				$company = get_post_meta(get_the_ID(), 'tl_company', true);
				$attribution = touchline_format_testimonial_attribution($name, $role, $company);
				?>
				<article class="tl-testimonial">
					<?php if ('' !== $quote) : ?>
						<blockquote><?php echo wp_kses_post(wpautop($quote)); ?></blockquote>
					<?php endif; ?>
					<?php if ('' !== $attribution) : ?>
						<p class="tl-testimonial__attribution"><?php echo esc_html($attribution); ?></p>
					<?php endif; ?>
				</article>
				<?php
			endwhile;
			?>
		</section>
		<?php
		wp_reset_postdata();

		return trim(ob_get_clean());
	}
	add_shortcode('touchline_testimonials', 'touchline_testimonials_shortcode');
}
