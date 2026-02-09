<?php
/**
 * Footer template.
 *
 * Contains the closing of the main content and HTML document.
 */
?>

<footer class="site-footer">
  <p>
    <?php
    /* translators: %s: current year. */
    echo esc_html(sprintf(__('© %s Your Site Name', 'touchline-theme'), date_i18n('Y')));
    ?>
  </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
