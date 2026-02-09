<?php
/**
 * Server render for Touchline form block.
 */

declare(strict_types=1);

$variant = isset($attributes['variant']) ? sanitize_key($attributes['variant']) : 'demo';
$show_heading = array_key_exists('showHeading', $attributes) ? (bool) $attributes['showHeading'] : true;
$show_subheading = array_key_exists('showSubheading', $attributes) ? (bool) $attributes['showSubheading'] : true;
$submit_label = isset($attributes['submitLabel']) && $attributes['submitLabel'] !== ''
    ? sanitize_text_field($attributes['submitLabel'])
    : __('Submit', 'touchline');

$variants = [
    'demo' => [
        'heading' => __('Request a demo', 'touchline'),
        'subheading' => __('See how Touchline streamlines sponsorship operations.', 'touchline'),
        'fields' => ['name', 'email', 'company', 'role'],
    ],
    'contact' => [
        'heading' => __('Contact Touchline', 'touchline'),
        'subheading' => __('Tell us about your sponsorship goals and we will reach out.', 'touchline'),
        'fields' => ['name', 'email', 'company', 'message'],
    ],
    'waitlist' => [
        'heading' => __('Join the waitlist', 'touchline'),
        'subheading' => __('Be first to hear about new Touchline releases.', 'touchline'),
        'fields' => ['name', 'email'],
    ],
    'download' => [
        'heading' => __('Get the download', 'touchline'),
        'subheading' => __('We will email the resource to you.', 'touchline'),
        'fields' => ['name', 'email', 'company'],
    ],
];

$config = $variants[$variant] ?? $variants['demo'];
$form_id = wp_unique_id('touchline-form-');

$wrapper_attributes = get_block_wrapper_attributes([
    'class' => 'touchline-form',
]);

function touchline_form_input(string $id, string $label, string $type = 'text', bool $required = true): string
{
    $required_attr = $required ? 'required' : '';
    return sprintf(
        '<div class="touchline-form__field"><label for="%1$s">%2$s</label><input id="%1$s" name="%3$s" type="%4$s" %5$s/></div>',
        esc_attr($id),
        esc_html($label),
        esc_attr($id),
        esc_attr($type),
        $required_attr
    );
}
?>
<div <?php echo $wrapper_attributes; ?> data-variant="<?php echo esc_attr($variant); ?>">
  <form class="touchline-form__form" data-analytics="touchline-form" novalidate>
    <?php if ($show_heading) : ?>
      <h3><?php echo esc_html($config['heading']); ?></h3>
    <?php endif; ?>
    <?php if ($show_subheading) : ?>
      <p><?php echo esc_html($config['subheading']); ?></p>
    <?php endif; ?>

    <?php
    foreach ($config['fields'] as $field) {
        switch ($field) {
            case 'name':
                echo touchline_form_input($form_id . '-name', __('Full name', 'touchline'));
                break;
            case 'email':
                echo touchline_form_input($form_id . '-email', __('Work email', 'touchline'), 'email');
                break;
            case 'company':
                echo touchline_form_input($form_id . '-company', __('Company', 'touchline'));
                break;
            case 'role':
                echo touchline_form_input($form_id . '-role', __('Role', 'touchline'));
                break;
            case 'message':
                echo sprintf(
                    '<div class="touchline-form__field"><label for="%1$s">%2$s</label><textarea id="%1$s" name="%1$s" rows="4" required></textarea></div>',
                    esc_attr($form_id . '-message'),
                    esc_html__('How can we help?', 'touchline')
                );
                break;
        }
    }
    ?>

    <div class="touchline-form__actions">
      <button type="submit" class="wp-element-button"><?php echo esc_html($submit_label); ?></button>
      <span class="touchline-form__note">TODO: Connect to your form handler or CRM webhook.</span>
    </div>
  </form>
</div>
