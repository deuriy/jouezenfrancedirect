<?php
/**
 * Logos block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$logos = get_field('logos');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id=' . esc_attr( $block['anchor'] ) . ' ';
}

// Create class attribute allowing for custom "className" values.
$class_name = 'logos';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
  <?php foreach ($logos as $logo_id): ?>
    <?php
      echo wp_get_attachment_image( $logo_id, 'full', false, [
        'class' => 'logos__item'
      ] );
    ?>
  <?php endforeach ?>
</div>