<?php
/**
 * Agreement terms template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$copyright = get_field('copyright');
$description = get_field('description');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id=' . esc_attr( $block['anchor'] ) . ' ';
}

// Create class attribute allowing for custom "className" values.
$class_name = 'agreement-terms';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
  <?php if ($copyright): ?>
    <div class="agreement-terms__copyright">
      <?php echo $copyright ?>
    </div>
  <?php endif ?>

  <?php if ($description): ?>
    <div class="agreement-terms__description">
      <?php echo $description ?>
    </div>
  <?php endif ?>
</div>