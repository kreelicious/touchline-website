<?php
/**
 * Footer template.
 *
 * Contains the closing of the main content and HTML document.
 */
?>
</main>
<footer class="site-footer" role="contentinfo">
  <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
